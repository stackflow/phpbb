<?php
namespace sarafan\guru\model;


class ExternalPayment
{
    protected $id;
    protected $paymentSystemID;
    protected $total;
    protected $externalID;
    protected $externalDate;
    protected $created;

    public function __construct()
    {
    }

    /**
     * @param array $data
     * @return ExternalPaymentSystem
     */
    public static function load($data)
    {
        if (!isset($data['ext_payment_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['ext_payment_system_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['total'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['external_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['external_date'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['created'])) {
            throw new \RuntimeException('Wrong data');
        }

        $object = new self();
        $object->id = $data['ext_payment_id'];
        $object->paymentSystemID = $data['ext_payment_system_id'];
        $object->total = $data['total'];
        $object->externalID = $data['external_id'];
        $object->externalDate = $data['external_date'];
        $object->created = $data['created'];

        return $object;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
