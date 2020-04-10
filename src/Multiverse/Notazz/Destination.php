<?php

namespace Multiverse\Notazz;

class Destination extends Resource
{
    /**
     * @var string
     */
    protected $destination_name;
    /**
     * @var int
     */
    protected $destination_taxid;
    /**
     * @var string
     */
    protected $destination_ie;
    /**
     * @var string
     */
    protected $destination_im;
    /**
     * @var string
     */
    protected $destination_taxtype;
    /**
     * @var string
     */
    protected $destination_street;
    /**
     * @var string
     */
    protected $destination_number;
    /**
     * @var string
     */
    protected $destination_complement;
    /**
     * @var string
     */
    protected $destination_district;
    /**
     * @var string
     */
    protected $destination_city;
    /**
     * @var string
     */
    protected $destination_uf;
    /**
     * @var string
     */
    protected $destination_zipcode;
    /**
     * @var int
     */
    protected $destination_phone;
    /**
     * @var string
     */
    protected $destination_email;
    /**
     * @var array
     */
    protected $destination_email_send;

    /**
     * Get the value of DESTINATION_NAME
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destination_name;
    }

    /**
     * Set the value of DESTINATION_NAME
     *
     * @param string $destination_name
     */
    public function setDestinationName(string $destination_name)
    {
        $this->destination_name = $destination_name;
    }

    /**
     * Get the value of DESTINATION_TAXID
     *
     * @return int
     */
    public function getDestinationTaxid()
    {
        return $this->destination_taxid;
    }

    /**
     * Set the value of DESTINATION_TAXID
     * CPF ou CNPJ
     *
     * @param int $destination_taxid
     */
    public function setDestinationTaxid(string $destination_taxid)
    {
        $this->destination_taxid = $destination_taxid;
    }

    /**
     * Get the value of DESTINATION_IE
     *
     * @return string
     */
    public function getDestinationIe()
    {
        return $this->destination_ie;
    }

    /**
     * Set the value of DESTINATION_IE
     * Inscrição Estadual
     *
     * @param string $destination_ie
     */
    public function setDestinationIe(string $destination_ie)
    {
        $this->destination_ie = $destination_ie;
    }

    /**
     * Get the value of DESTINATION_IM
     *
     * @return string
     */
    public function getDestinationIm()
    {
        return $this->destination_im;
    }

    /**
     * Set the value of DESTINATION_IM
     * Inscrição Municipal
     *
     * @param string $destination_im
     */
    public function setDestinationIm(string $destination_im)
    {
        $this->destination_im = $destination_im;
    }

    /**
     * Get the value of DESTINATION_TAXTYPE
     *
     * @return string
     */
    public function getDestinationTaxtype()
    {
        return $this->destination_taxtype;
    }

    /**
     * Set the value of DESTINATION_TAXTYPE
     * F = Física, J = Jurídica, E = Estrangeiro
     *
     * @param string $destination_taxtype
     */
    public function setDestinationTaxtype(string $destination_taxtype)
    {
        $this->destination_taxtype = $destination_taxtype;
    }

    /**
     * Get the value of DESTINATION_STREET
     *
     * @return string
     */
    public function getDestinationStreet()
    {
        return $this->destination_street;
    }

    /**
     * Set the value of DESTINATION_STREET
     * Logradouro
     *
     * @param string $destination_street
     */
    public function setDestinationStreet(string $destination_street)
    {
        $this->destination_street = $destination_street;
    }

    /**
     * Get the value of DESTINATION_NUMBER
     *
     * @return string
     */
    public function getDestinationNumber()
    {
        return $this->destination_number;
    }

    /**
     * Set the value of DESTINATION_NUMBER
     *
     * @param string $destination_number
     */
    public function setDestinationNumber(string $destination_number)
    {
        $this->destination_number = $destination_number;
    }

    /**
     * Get the value of DESTINATION_COMPLEMENT
     *
     * @return string
     */
    public function getDestinationComplement()
    {
        return $this->destination_complement;
    }

    /**
     * Set the value of DESTINATION_COMPLEMENT
     *
     * @param string $destination_complement
     */
    public function setDestinationComplement(string $destination_complement)
    {
        $this->destination_complement = $destination_complement;
    }

    /**
     * Get the value of DESTINATION_DISTRICT
     *
     * @return string
     */
    public function getDestinationDistrict()
    {
        return $this->destination_district;
    }

    /**
     * Set the value of DESTINATION_DISTRICT
     * Bairro
     *
     * @param string $destination_district
     */
    public function setDestinationDistrict(string $destination_district)
    {
        $this->destination_district = $destination_district;
    }

    /**
     * Get the value of DESTINATION_CITY
     *
     * @return string
     */
    public function getDestinationCity()
    {
        return $this->destination_city;
    }

    /**
     * Set the value of DESTINATION_CITY
     * Cidade
     *
     * @param string $destination_city
     */
    public function setDestinationCity(string $destination_city)
    {
        $this->destination_city = $destination_city;
    }

    /**
     * Get the value of DESTINATION_UF
     *
     * @return int
     */
    public function getDestinationUf()
    {
        return $this->destination_uf;
    }

    /**
     * Set the value of DESTINATION_UF
     *
     * @param int $destination_uf
     */
    public function setDestinationUf(string $destination_uf)
    {
        $this->destination_uf = $destination_uf;
    }

    /**
     * Get the value of DESTINATION_ZIPCODE
     *
     * @return string
     */
    public function getDestinationZipcode()
    {
        return $this->destination_zipcode;
    }

    /**
     * Set the value of DESTINATION_ZIPCODE
     * CEP
     *
     * @param string $destination_zipcode
     */
    public function setDestinationZipcode(string $destination_zipcode)
    {
        $this->destination_zipcode = $destination_zipcode;
    }

    /**
     * Get the value of DESTINATION_PHONE
     *
     * @return int
     */
    public function getDestinationPhone()
    {
        return $this->destination_phone;
    }

    /**
     * Set the value of DESTINATION_PHONE
     *
     * @param int $destination_phone
     */
    public function setDestinationPhone(string $destination_phone)
    {
        $this->destination_phone = $destination_phone;
    }

    /**
     * Get the value of DESTINATION_EMAIL
     *
     * @return string
     */
    public function getDestinationEmail()
    {
        return $this->destination_email;
    }

    /**
     * Set the value of DESTINATION_EMAIL
     *
     * @param string $destination_email
     */
    public function setDestinationEmail(string $destination_email)
    {
        $this->destination_email = $destination_email;
    }

    /**
     * Get the value of DESTINATION_EMAIL_SEND
     * Esse parâmetro é um Array que irá conter os e-mails que será enviado após a nota ser autorizada ou cancelada.
     * OBS: Para cada e-mail que será enviado, passe os parâmetros abaixo alterando o índice em +1 para cada e-mail
     *
     * @return array
     */
    public function getDestinationEmailSend()
    {
        return $this->destination_email_send;
    }

    /**
     * Set the value of DESTINATION_EMAIL_SEND
     * Esse parâmetro é um Array que irá conter os e-mails que será enviado após a nota ser autorizada ou cancelada.
     * OBS: Para cada e-mail que será enviado, passe os parâmetros abaixo alterando o índice em +1 para cada e-mail
     *
     * @param array $destination_email_send
     */
    public function setDestinationEmailSend(array $destination_email_send)
    {
        $this->destination_email_send = $destination_email_send;
    }
}
