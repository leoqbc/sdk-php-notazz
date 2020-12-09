<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFe\Shipping;
use Multiverse\Notazz\DSL\ShippingCarrierBuilder;
use Multiverse\Notazz\DSL\ShippingVehiclesBuilder;
use Multiverse\Notazz\DSL\ShippingVolumesBuilder;

class ShippingBuilder
{
    protected $shipping;

    protected $shippingCarrierBuilder;

    protected $shippingVehiclesBuilder;

    protected $shippingVolumesBuilder;

    protected $current;

    public function __construct()
    {
        $this->shipping = new Shipping();

        $this->shippingCarrierBuilder = new ShippingCarrierBuilder();
        $this->shippingVehiclesBuilder = new ShippingVehiclesBuilder();
        $this->shippingVolumesBuilder = new ShippingVolumesBuilder();
    }

    public function __call($method, $args)
    {
        $arg = $args[0] ?? null;

        $target = $this->current;

        $this->$target->$method($arg);

        return $this;
    }

    public function value($value)
    {
        $this->shipping->setDocumentFreteValue($value);

        return $this;
    }

    public function mode($value)
    {
        $this->shipping->setDocumentFreteMod($value);

        return $this;
    }

    public function carrier()
    {
        $this->current = 'shippingCarrierBuilder';

        return $this;
    }

    public function vehicles()
    {
        $this->current = 'shippingVehiclesBuilder';

        return $this;
    }

    public function volumes()
    {
        $this->current = 'shippingVolumesBuilder';

        return $this;
    }

    public function save()
    {
        $this->shipping->setDocumentFreteTransportadora(
            $this->shippingCarrierBuilder->getInstance()
        );

        $this->shipping->setDocumentFreteVeiculo(
            $this->shippingVehiclesBuilder->getInstance()
        );

        $this->shipping->setDocumentFreteVolumes(
            $this->shippingVolumesBuilder->getInstance()
        );

        return $this;
    }

    public function getArray()
    {
        return $this->shipping->toArray();
    }

    public function getInstance()
    {
        return $this->shipping;
    }
}
