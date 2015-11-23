<?php
namespace sarafan\guru\helper\payment;

use Exception;
use sarafan\guru\helper\Database;

class Bisys
{
    protected $code = 'bisys';
    protected $paymentSystem;
    /**
     * @var \sarafan\guru\model\Account
     */
    protected $account;
    /**
     * @var string
     */
    protected $sign;
    /**
     * @var string
     */
    protected $param;
    /**
     * @var string
     */
    private $payID;
    /**
     * @var string
     */
    private $payDate;
    /**
     * @var integer
     */
    private $payAmount;

    /**
     * Constructor
     * NOTE: The parameters of this method must match in order and type with
     * the dependencies defined in the services.yml file for this service.
     *
     * @param Database $db Database helper
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
        $this->paymentSystem = $this->db->getExternalPaymentSystemByCode($this->code);
    }

    /**
     * @param string $string
     * @return array $response
     */
    public function parse($string)
    {
        $response = [];
        try {
            $post = htmlspecialchars_decode(trim($string));
            if (!$post) {
                throw new \RuntimeException('Параметр params не найден', 11);
            }

            $this->sign = strtolower(trim($this->getTagContent($post, 'sign')));
            if (!$this->sign) {
                throw new \RuntimeException('Тэг sign не найден', 11);
            }
            $this->param = trim($this->getTagContent($post, 'params'));
            if (!$this->param) {
                throw new \Exception('Тэг params не найден', 11);
            }

            $pass = strtolower(md5($this->param . $this->paymentSystem->getToken()));
            if ($this->sign !== $pass) {
                throw new \RuntimeException('Неверная цифровая подпись ' . $this->sign . ' != ' . $pass, 13);
            }

            $act = trim($this->getTagContent($this->param, 'act'));
            if (!$act) {
                throw new \Exception('Тэг act не найден', 11);
            }

            switch ($act) {
                case '1':
                    $params = $this->check();
                    break;
                case '2':
                    $params = $this->pay();
                    break;
                default:
                    throw new \RangeException('Неверное значение тэга act: ' . $act, 12);
            }
            $params['error_code'] = 0;
            $params['error_text'] = 'OK';

            $response['params'] = $this->getResponse($params);
            $response['sign'] = md5($response['params'] . $this->sign . $this->paymentSystem->getToken());
        } catch (\RuntimeException $e) {
            $response['params'] = $this->getResponse(['error_code' => $e->getCode(), 'error_text' => $e->getMessage()]);
        } catch (\Exception $e) {
            $response['params'] = $this->getResponse(['error_code' => $e->getCode(), 'error_text' => $e->getMessage()]);
            $response['sign'] = md5($response['params'] . $this->sign . $this->paymentSystem->getToken());
        }

        return $response;
    }

    /**
     * @param string $string
     * @param string $tag
     * @return null|string
     */
    private function getTagContent($string, $tag)
    {
        $pattern = '/<' . $tag . '>(.+)<\/' . $tag . '/usi';
        preg_match($pattern, $string, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }

    /**
     * @return array
     * @throws Exception
     */
    private function check()
    {
        $this->checkAccount();
        return [
            'account' => $this->account->getAccount(),
            'balance' => $this->account->getBalance(),
            'client_name' => $this->db->getUsername($this->account->getUserID())
        ];
    }

    private function checkAccount()
    {
        $account = $this->db->getAccountByAccount($this->getTagContent($this->param, 'account'));
        if (!$account) {
            throw new \Exception('Указанный номер счета отсутствует', 20);
        }

        $this->account = $account;
    }

    /**
     * @return array
     * @throws Exception
     */
    private function pay()
    {
        $this->checkAccount();
        $this->checkExternalPayment();

        $created = new \DateTime();
        $data = [];
        $data['ext_payment_system_id'] = $this->paymentSystem->getID();
        $data['total'] = $this->payAmount;
        $data['external_id'] = $this->payID;
        $data['external_date'] = $this->payDate;
        $data['created'] = $created->format('U');
        $externalPayment = $this->db->createExternalPayment($data);

        $response['account'] = $this->account->getAccount();
        $response['reg_id'] = $externalPayment->getID();
        $response['reg_date'] = $created->format('Y-m-dTH:i:s');

        return $response;
    }

    private function checkExternalPayment()
    {
        $payAmount = (int)$this->getTagContent($this->param, 'pay_amount');
        if ($payAmount < 0.01) {
            throw new \Exception('Указана некорректная сумма', 29);
        }
        $payDate = trim($this->getTagContent($this->param, 'pay_date'));
        if (!$payDate) {
            throw new \Exception('Тэг pay_date не найден', 11);
        }
        $payID = trim($this->getTagContent($this->param, 'pay_id'));
        if (!$payID) {
            throw new \Exception('Тэг pay_id не найден', 11);
        }
        $externalPayment = $this->db->getExternalPayment($payID);
        if ($externalPayment) {
            if ($payAmount === (int)$externalPayment->getTotal()) {
                throw new \Exception('Платеж уже был проведен', 1);
            } else {
                throw new \Exception('Был другой платеж с указанным номером', 30);
            }
        }

        $this->payID = $payID;
        $this->payDate = $payDate;
        $this->payAmount = $payAmount;
    }

    /**
     * @param array $data
     * @return string
     */
    private function getResponse($data)
    {
        $response = '';

        foreach ($data as $key => $value) {
            $response .= '<' . $key . '>' . $value . '</' . $key . '>';
        }

        return $response;
    }
}