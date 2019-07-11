<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ShippingVehicles extends Resource
{
    protected $DOCUMENT_FRETE_VEICULO_PLACA;
    protected $DOCUMENT_FRETE_VEICULO_UF;

    public function __construct(string $VEICULO_PLACA, string $VEICULO_UF)
    {
        $this->DOCUMENT_FRETE_VEICULO_PLACA = $VEICULO_PLACA;
        $this->DOCUMENT_FRETE_VEICULO_UF = $VEICULO_UF;
    }
}
