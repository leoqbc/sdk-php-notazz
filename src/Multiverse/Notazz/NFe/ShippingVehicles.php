<?php

namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ShippingVehicles extends Resource
{
    /**
     * @var string
     */
    protected $document_frete_veiculo_placa;
    /**
     * @var string
     */
    protected $document_frete_veiculo_uf;

    /**
     * Get the value of document_frete_veiculo_placa
     */
    public function getDocumentFreteVeiculoPlaca(): string
    {
        return $this->document_frete_veiculo_placa;
    }

    /**
     * Placa do veículo
     */
    public function setDocumentFreteVeiculoPlaca(string $document_frete_veiculo_placa)
    {
        $this->document_frete_veiculo_placa = $document_frete_veiculo_placa;
    }

    /**
     * Get the value of document_frete_veiculo_uf
     */
    public function getDocumentFreteVeiculoUf(): string
    {
        return $this->document_frete_veiculo_uf;
    }

    /**
     * Estado do veículo
     */
    public function setDocumentFreteVeiculoUf(string $document_frete_veiculo_uf)
    {
        $this->document_frete_veiculo_uf = $document_frete_veiculo_uf;
    }
}
