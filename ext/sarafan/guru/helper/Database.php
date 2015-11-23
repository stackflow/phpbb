<?php
namespace sarafan\guru\helper;

use phpbb\db\driver\driver_interface;
use sarafan\guru\model\Account;
use sarafan\guru\model\ExternalPayment;
use sarafan\guru\model\ExternalPaymentSystem;

class Database
{
    /* @var driver_interface */
    protected $db;

    /**
     * Constructor
     *
     * @param driver_interface $db
     */
    public function __construct(driver_interface $db)
    {
        $this->db = $db;
    }

    /**
     * @param int $userID
     * @param string $account
     * @return string
     */
    public function createAccount($userID, $account = null)
    {
        $sql_array = array(
            'SELECT' => 'a.account_id, a.account',
            'FROM' => array(
                'sp_account' => 'a'
            ),
            'WHERE' => $this->db->sql_in_set('user_id', $userID),
            'ORDER_BY' => 'account_id'
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);
        $result = $this->db->sql_query_limit($sql, 1);

        $accountID = (int)$this->db->sql_fetchfield('account_id');
        $acc = $this->db->sql_fetchfield('account');

        $this->db->sql_freeresult($result);
        if ($accountID) {
            return $acc;
        }

        if (!$account) {
            $date = new \DateTime();
            $account = $date->format('y') . sprintf('%1$03d', $date->format('z')) . '001';
        }

        $data = [
            'user_id' => $userID,
            'account' => $account,
            'balance' => 0,
            'created' => date('U')
        ];
        while (true) {
            $sql = 'INSERT INTO sp_account' . $this->db->sql_build_array('INSERT', $data);
            if ($this->db->sql_query($sql) === true) {
                break;
            } else {
                ++$account;
                $data['account'] = $account;
            }
        }

        return $account;
    }

    /**
     * @param string $account
     * @return null|Account
     */
    public function getAccountByAccount($account)
    {
        $sql_array = array(
            'SELECT' => '*',
            'FROM' => array(
                'sp_account' => 'a'
            ),
            'WHERE' => $this->db->sql_in_set('account', $account),
            'ORDER_BY' => 'account_id'
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);

        $result = $this->db->sql_query_limit($sql, 1);
        $row = $this->db->sql_fetchrow();
        $this->db->sql_freeresult($result);

        return $row ? Account::load($row) : null;
    }

    /**
     * @param string $code
     * @return null|ExternalPaymentSystem
     */
    public function getExternalPaymentSystemByCode($code)
    {
        $code = trim($code);
        if (!$code) {
            return null;
        }

        $sql_array = array(
            'SELECT' => '*',
            'FROM' => array(
                'sp_ext_payment_system' => 'eps'
            ),
            'WHERE' => $this->db->sql_in_set('code', $code)
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);

        $result = $this->db->sql_query_limit($sql, 1);
        $row = $this->db->sql_fetchrow();
        $this->db->sql_freeresult($result);

        return $row ? ExternalPaymentSystem::load($row) : null;
    }

    public function getUsername($userID)
    {
        $sql_array = array(
            'SELECT' => 'username',
            'FROM' => array(
                USERS_TABLE => 'u'
            ),
            'WHERE' => $this->db->sql_in_set('user_id', $userID)
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);

        $result = $this->db->sql_query_limit($sql, 1);
        $response = $this->db->sql_fetchfield('username');
        $this->db->sql_freeresult($result);

        return $response;
    }

    /**
     * @param $payID
     * @return null|ExternalPayment
     */
    public function getExternalPayment($payID)
    {
        $payID = trim($payID);
        if (!$payID) {
            return null;
        }

        $sql_array = array(
            'SELECT' => '*',
            'FROM' => array(
                'sp_ext_payment' => 'ep'
            ),
            'WHERE' => $this->db->sql_in_set('external_id', $payID)
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);

        $result = $this->db->sql_query_limit($sql, 1);
        $row = $this->db->sql_fetchrow();
        $this->db->sql_freeresult($result);

        return $row ? ExternalPayment::load($row) : null;
    }

    public function createExternalPayment($data)
    {
        if (!isset($data['ext_payment_system_id'])) {
            throw new \Exception('Wrong data');
        }
        if (!isset($data['total'])) {
            throw new \Exception('Wrong data');
        }
        if (!isset($data['external_id'])) {
            throw new \Exception('Wrong data');
        }
        if (!isset($data['external_date'])) {
            throw new \Exception('Wrong data');
        }
        if (!isset($data['created'])) {
            throw new \Exception('Wrong data');
        }

        $sql = 'INSERT INTO sp_ext_payment' . $this->db->sql_build_array('INSERT', $data);
        if ($this->db->sql_query($sql) !== true) {
            throw new \Exception();
        }
        $data['ext_payment_id'] = $this->db->sql_nextid();

        return ExternalPayment::load($data);
    }
}
