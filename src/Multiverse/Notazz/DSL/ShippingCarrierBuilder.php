<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFe\ShippingCarrier;
use Multiverse\Notazz\DSL\Tools\Formatter;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;

class ShippingCarrierBuilder
{
    protected $shippingCarrier;

    public function __construct()
    {
        $this->shippingCarrier = new ShippingCarrier();
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDocumentFreteTransportadora$method";

        if (false === method_exists($this->shippingCarrier, $method)) {
            throw new MethodNotFoundException(
                "Method ($method) not found in class " . get_class($this->shippingCarrier)
            );
        }

        $this->shippingCarrier->$method($args[0]);
        return $this;
    }

    public function getArray()
    {
        return $this->shippingCarrier->toArray();
    }

    public function getInstance()
    {
        return $this->shippingCarrier;
    }
}
