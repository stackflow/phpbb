<?php
namespace sarafan\guru\model;

class Account
{
    protected $id;
    protected $userID;
    protected $account;
    protected $balance;
    protected $created;

    private function __construct()
    {
    }

    /**
     * @param array $data
     * @return self
     */
    public static function load($data)
    {
        if (!isset($data['account_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['user_id'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['account'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['balance'])) {
            throw new \RuntimeException('Wrong data');
        }
        if (!isset($data['created'])) {
            throw new \RuntimeException('Wrong data');
        }

        $object = new self();
        $object->id = $data['account_id'];
        $object->userID = $data['user_id'];
        $object->account = $data['account'];
        $object->balance = $data['balance'];
        $object->created = $data['created'];

        return $object;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getUserID()
    {
        return $this->balance;
    }
}
