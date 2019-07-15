<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ShippingCarrier extends Resource
{
    /**
     * @var string
     */
    protected $document_frete_transportadora_name;
    /**
     * @var string
     */
    protected $document_frete_transportadora_taxid;
    /**
     * @var int
     */
    protected $document_frete_transportadora_ie;
    /**
     * @var string
     */
    protected $document_frete_transportadora_street;
    /**
     * @var string
     */
    protected $document_frete_transportadora_number;
    /**
     * @var string
     */
    protected $document_frete_transportadora_district;
    /**
     * @var string
     */
    protected $document_frete_transportadora_city;
    /**
     * @var string
     */
    protected $document_frete_transportadora_uf;

    /**
     * Get the value of document_frete_transportadora_name
     * No
     * @return  string
     */
    public function getDocumentFreteTransportadoraName()
    {
        return $this->document_frete_transportadora_name;
    }

    /**
     * Nome ou Razão Social da transportadora
     *
     * @param  string  $document_frete_transportadora_name
     */
    public function setDocumentFreteTransportadoraName(string $document_frete_transportadora_name)
    {
        $this->document_frete_transportadora_name = $document_frete_transportadora_name;
    }

    /**
     * Get the value of document_frete_transportadora_taxid
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraTaxid()
    {
        return $this->document_frete_transportadora_taxid;
    }

    /**
     * CPF / CNPJ
     *
     * @param  string  $document_frete_transportadora_taxid
     *
     */
    public function setDocumentFreteTransportadoraTaxid(string $document_frete_transportadora_taxid)
    {
        $this->document_frete_transportadora_taxid = $document_frete_transportadora_taxid;
    }

    /**
     * Get the value of document_frete_transportadora_ie
     *
     * @return  int
     */
    public function getDocumentFreteTransportadoraIe()
    {
        return $this->document_frete_transportadora_ie;
    }

    /**
     * Inscrição estadual
     *
     * @param  int  $document_frete_transportadora_ie
     *
     */
    public function setDocumentFreteTransportadoraIe(int $document_frete_transportadora_ie)
    {
        $this->document_frete_transportadora_ie = $document_frete_transportadora_ie;
    }

    /**
     * Get the value of document_frete_transportadora_street
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraStreet()
    {
        return $this->document_frete_transportadora_street;
    }

    /**
     * Logradouro
     *
     * @param  string  $document_frete_transportadora_street
     *

     */
    public function setDocumentFreteTransportadoraStreet(string $document_frete_transportadora_street)
    {
        $this->document_frete_transportadora_street = $document_frete_transportadora_street;
    }

    /**
     * Get the value of document_frete_transportadora_number
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraNumber()
    {
        return $this->document_frete_transportadora_number;
    }

    /**
     * Número
     *
     * @param  string  $document_frete_transportadora_number
     */
    public function setDocumentFreteTransportadoraNumber(string $document_frete_transportadora_number)
    {
        $this->document_frete_transportadora_number = $document_frete_transportadora_number;
    }

    /**
     * Get the value of document_frete_transportadora_district
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraDistrict()
    {
        return $this->document_frete_transportadora_district;
    }

    /**
     * Bairro
     *
     * @param  string  $document_frete_transportadora_district
     */
    public function setDocumentFreteTransportadoraDistrict(string $document_frete_transportadora_district)
    {
        $this->document_frete_transportadora_district = $document_frete_transportadora_district;
    }

    /**
     * Get the value of document_frete_transportadora_city
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraCity()
    {
        return $this->document_frete_transportadora_city;
    }

    /**
     * Cidade
     *
     * @param  string  $document_frete_transportadora_city
     */
    public function setDocumentFreteTransportadoraCity(string $document_frete_transportadora_city)
    {
        $this->document_frete_transportadora_city = $document_frete_transportadora_city;
    }

    /**
     * Get the value of document_frete_transportadora_uf
     *
     * @return  string
     */
    public function getDocumentFreteTransportadoraUf()
    {
        return $this->document_frete_transportadora_uf;
    }

    /**
     * UF
     *
     * @param  string  $document_frete_transportadora_uf
     */
    public function setDocumentFreteTransportadoraUf(string $document_frete_transportadora_uf)
    {
        $this->document_frete_transportadora_uf = $document_frete_transportadora_uf;
    }
}
