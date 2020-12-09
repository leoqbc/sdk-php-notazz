<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\Destination;
use Multiverse\Notazz\DSL\Tools\Formatter;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;
use Multiverse\Notazz\DSL\Exceptions\CantAddEmailException;

class DestinationBuilder
{
    protected $destination;

    protected $lastCalled;

    protected $emailList = [];

    public function __construct()
    {
        $this->destination = new Destination();
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDestination$method";

        if (false === method_exists($this->destination, $method)) {
            throw new MethodNotFoundException("Method ($method) not found in class " . get_class($this->destination));
        }

        $this->lastCalled = $method;

        $this->destination->$method($args[0]);
        return $this;
    }

    public function getArray()
    {
        return $this->destination->toArray();
    }

    public function sendEmailList()
    {
        $this->lastCalled = 'sendEmailList';
        return $this;
    }

    public function add($email)
    {
        if ($this->lastCalled != 'sendEmailList') {
            throw new CantAddEmailException('Cannot add email after a method diferent from sendEmailList');
        }
        $this->emailList[] = $email;
        return $this;
    }

    public function end()
    {
        $this->emailSend($this->emailList);
        $this->emailList = [];
        $this->lastCalled = false;
        return $this;
    }

    public function getInstance()
    {
        return $this->destination;
    }
}
