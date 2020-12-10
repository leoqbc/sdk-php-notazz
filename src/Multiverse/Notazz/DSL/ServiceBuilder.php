<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFSe\Service;

class ServiceBuilder
{
    protected $service;

    protected $aliquotasBuilder;

    protected $lastCalled;

    public function __construct()
    {
        $this->service = new Service();
        $this->aliquotasBuilder = new AliquotasBuilder();
    }

    public function __call(string $method, array $args)
    {
        $arg = $args[0] ?? null;
        $this->aliquotasBuilder->$method($arg);
        return $this;
    }

    public function listLc116($value)
    {
        $this->service->setServiceListLc116($value);
        return $this;
    }

    public function withheldIss($value)
    {
        $this->service->setWithheldIss($value);
        return $this;
    }

    public function cityCode($value)
    {
        $this->service->setCityServiceCode($value);
        return $this;
    }

    public function description($value)
    {
        $this->service->setCityServiceDescription($value);
        return $this;
    }

    public function aliquotas()
    {
        return $this;
    }

    public function save()
    {
        $this->service->setAliquotas($this->aliquotasBuilder->getInstance());
        return $this;
    }

    public function getArray(): array
    {
        return $this->service->toArray();
    }

    public function getInstance(): Service
    {
        return $this->service;
    }
}
