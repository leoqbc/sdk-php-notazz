<?php

namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class Shipping extends Resource
{

    /**
     * @var array
     */
    protected $DOCUMENT_FRETE;
    /**
     * @var array
     */
    protected $DOCUMENT_FRETE_TRANSPORTADORA;
    /**
     * @var array
     */
    protected $DOCUMENT_FRETE_VEICULO;
    /**
     * @var array
     */
    protected $DOCUMENT_FRETE_VOLUMES;

    public function setShippingBase(ShippingBase $shippingBase)
    {
        $this->DOCUMENT_FRETE = $shippingBase->toArray();
    }

    public function setShippingVehicles(ShippingVehicles $shippingVehicles)
    {
        $this->DOCUMENT_FRETE_VEICULO = $shippingVehicles->toArray();
    }
}
