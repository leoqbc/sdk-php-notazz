<?php

namespace Multiverse\Notazz\NFe;

class Shipping
{
    /**
     * @var array
     */
    protected $document_frete;
    /**
     * @var int
     */
    protected $document_frete_mod;
    /**
     * @var float
     */
    protected $document_frete_value;
    /**
     * @var array
     */
    protected $document_frete_transportadora;
    /**
     * @var array
     */
    protected $document_frete_veiculo;
    /**
     * @var array
     */
    protected $document_frete_volumes;

    /**
     * Set the value of document_frete
     */
    protected function setDocumentFrete($items)
    {
        $this->document_frete[] = $items;
    }

    /**
     * Get the value of document_frete_mod
     *
     * @return int
     */
    public function getDocumentFreteMod(): int
    {
        return $this->document_frete_mod;
    }

    /**
     * 0 = Por conta do emitente
     * 1 = Por conta do destinatário / remetente
     * 2 = Por conta de terceiros
     * 9 = Sem frete
     *
     * @param int $document_frete_mod
     */
    public function setDocumentFreteMod(int $document_frete_mod)
    {
        $this->document_frete_mod = $document_frete_mod;
    }

    /**
     * Get the value of document_frete_value
     *
     * @return float
     */
    public function getDocumentFreteValue(): float
    {
        return $this->document_frete_value;
    }

    /**
     * Set the value of document_frete_value
     *
     * @param float $document_frete_value
     */
    public function setDocumentFreteValue(float $document_frete_value)
    {
        $this->document_frete_value = $document_frete_value;
    }

    /**
     * Get the value of document_frete_transportadora
     *
     * @return array
     */
    public function getDocumentFreteTransportadora(): array
    {
        return $this->document_frete_transportadora;
    }

    /**
     * Set the value of document_frete_transportadora
     *
     * @param array $document_frete_transportadora
     */
    public function setDocumentFreteTransportadora(ShippingCarrier $document_frete_transportadora)
    {
        $this->document_frete_transportadora = $document_frete_transportadora->toArray();
    }

    /**
     * Get the value of document_frete_veiculo
     *
     * @return array
     */
    public function getDocumentFreteVeiculo(): array
    {
        return $this->document_frete_veiculo;
    }

    /**
     * Set the value of document_frete_veiculo
     *
     * @param array $document_frete_veiculo
     */
    public function setDocumentFreteVeiculo(ShippingVehicles $document_frete_veiculo)
    {
        $this->document_frete_veiculo = $document_frete_veiculo->toArray();
    }

    /**
     * Get the value of document_frete_volumes
     *
     * @return array
     */
    public function getDocumentFreteVolumes(): array
    {
        return $this->document_frete_volumes;
    }

    /**
     * Set the value of document_frete_volumes
     *
     * @param array $document_frete_volumes
     */
    public function setDocumentFreteVolumes(ShippingVolumes $document_frete_volumes)
    {
        $this->document_frete_volumes = $document_frete_volumes->toArray();
    }

    public function toArray()
    {
        $array = [];

        foreach ($this as $key => $value) {
            if ($value === null) {
                continue;
            }
            if ($key === 'document_frete') {
                continue;
            }
            $array[strtoupper($key)] = $value;
        }

        $this->document_frete['DOCUMENT_FRETE'] = $array;

        return $this->document_frete;
    }
}
