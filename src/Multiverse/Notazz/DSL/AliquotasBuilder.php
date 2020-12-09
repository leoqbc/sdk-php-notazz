<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFSe\Aliquotas;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;
use Multiverse\Notazz\DSL\Tools\Formatter;

class AliquotasBuilder
{
    protected $aliquotas;

    public function __construct()
    {
        $this->aliquotas = new Aliquotas();
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = 'set' . $method;

        if (false === method_exists($this->aliquotas, $method)) {
            throw new MethodNotFoundException("Method ($method) not found in class " . get_class($this->aliquotas));
        }

        $this->aliquotas->$method($args[0]);
        return $this;
    }

    public function getInstance(): Aliquotas
    {
        return $this->aliquotas;
    }

    public function getArray(): array
    {
        return $this->aliquotas->toArray();
    }
}
