<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFe\ShippingVolumes;
use Multiverse\Notazz\DSL\Tools\Formatter;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;

class ShippingVolumesBuilder
{
    protected $shippingVolumes;

    public function __construct()
    {
        $this->shippingVolumes = new ShippingVolumes();
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDocumentFreteVolumes$method";

        if (false === method_exists($this->shippingVolumes, $method)) {
            throw new MethodNotFoundException(
                "Method ($method) not found in class " . get_class($this->shippingVolumes)
            );
        }

        $this->shippingVolumes->$method($args[0]);
        return $this;
    }

    public function getArray()
    {
        return $this->shippingVolumes->toArray();
    }

    public function getInstance()
    {
        return $this->shippingVolumes;
    }
}
