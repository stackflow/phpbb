<?php
namespace sarafan\guru\model;


class ExternalPaymentSystem
{
    protected $id;
    protected $code;
    protected $title;
    protected $description;
    protected $rate;
    protected $token;
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
        if (!isset($data['ext_payment_system_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['code'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['title'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['description'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['rate'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['token'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['created'])) {
            throw new \RuntimeException('Wrong data');
        }

        $object = new self();
        $object->id = $data['ext_payment_system_id'];
        $object->code = $data['code'];
        $object->title = $data['title'];
        $object->description = $data['description'];
        $object->rate = $data['rate'];
        $object->token = $data['token'];
        $object->created = $data['created'];

        return $object;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getToken()
    {
        return $this->token;
    }
}
