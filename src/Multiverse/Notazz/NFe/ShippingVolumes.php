<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ShippingVolumes extends Resource
{
    /**
     * @var int
     */
    protected $document_frete_volumes_qtd;
    /**
     * @var string
     */
    protected $document_frete_volumes_species;
    /**
     * @var float
     */
    protected $document_frete_volumes_net_weight;
    /**
     * @var float
     */
    protected $document_frete_volumes_gross_weight;

    /**
     * Get the value of document_frete_volumes_qtd
     *
     * @return  int
     */
    public function getDocumentFreteVolumesQtd() : int
    {
        return $this->document_frete_volumes_qtd;
    }

    /**
     * Quantidade de volumes
     *
     * @param  int  $document_frete_volumes_qtd
     */
    public function setDocumentFreteVolumesQtd(int $document_frete_volumes_qtd)
    {
        $this->document_frete_volumes_qtd = $document_frete_volumes_qtd;
    }

    /**
     * Get the value of document_frete_volumes_species
     *
     * @return  string
     */
    public function getDocumentFreteVolumesSpecies() : string
    {
        return $this->document_frete_volumes_species;
    }

    /**
     * Espécie dos volumes. Ex.: CAIXA, FARDO
     *
     * @param  string  $document_frete_volumes_species
     */
    public function setDocumentFreteVolumesSpecies(string $document_frete_volumes_species)
    {
        $this->document_frete_volumes_species = $document_frete_volumes_species;
    }

    /**
     * Get the value of document_frete_volumes_net_weight
     *
     * @return  float
     */
    public function getDocumentFreteVolumesNetWeight() : float
    {
        return $this->document_frete_volumes_net_weight;
    }

    /**
     * Peso líquido em KG
     *
     * @param  float  $document_frete_volumes_net_weight
     */
    public function setDocumentFreteVolumesNetWeight(float $document_frete_volumes_net_weight)
    {
        $this->document_frete_volumes_net_weight = $document_frete_volumes_net_weight;
    }

    /**
     * Get the value of document_frete_volumes_gross_weight
     *
     * @return  float
     */
    public function getDocumentFreteVolumesGrossWeight() : float
    {
        return $this->document_frete_volumes_gross_weight;
    }

    /**
     * Peso bruto em KG
     *
     * @param  float  $document_frete_volumes_gross_weight
     *
     */
    public function setDocumentFreteVolumesGrossWeight(float $document_frete_volumes_gross_weight)
    {
        $this->document_frete_volumes_gross_weight = $document_frete_volumes_gross_weight;
    }
}
