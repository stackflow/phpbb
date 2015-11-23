<?php
namespace sarafan\guru\controller\payment\bisys;

class Response
{
    protected $sign;
    protected $code;

    public function __construct($sign = '', $code = 0, $message = 'OK')
    {
        $this->setSign($sign);
        $this->setCode($sign);
        $this->setMessage($message);
    }

    private function setCode($code = 0)
    {
        $this->code = trim($code);
    }

    public function getCode()
    {
        return $this->code;
    }

    private function setSign($sign = '')
    {
        $this->sign = trim($sign);
    }

    public function getSign()
    {
        return $this->sign;
    }

    private function setMessage($message = 'OK')
    {
        $this->message = trim($message);
    }

    public function getMessage()
    {
        return $this->message;
    }
}