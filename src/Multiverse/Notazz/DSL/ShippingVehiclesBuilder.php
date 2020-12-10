<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFe\ShippingVehicles;
use Multiverse\Notazz\DSL\Tools\Formatter;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;

class ShippingVehiclesBuilder
{
    protected $shippingVehicles;

    public function __construct()
    {
        $this->shippingVehicles = new ShippingVehicles();
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDocumentFreteVeiculo$method";

        if (false === method_exists($this->shippingVehicles, $method)) {
            throw new MethodNotFoundException(
                "Method ($method) not found in class " . get_class($this->shippingVehicles)
            );
        }

        $this->shippingVehicles->$method($args[0]);
        return $this;
    }

    public function getArray()
    {
        return $this->shippingVehicles->toArray();
    }

    public function getInstance()
    {
        return $this->shippingVehicles;
    }
}
