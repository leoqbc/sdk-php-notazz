<?php namespace Multiverse\Notazz;

class Destination extends Resource
{
    /**
     * @var string
     */
    protected $DESTINATION_NAME;
    /**
     * @var int
     */
    protected $DESTINATION_TAXID;
    /**
     * @var string
     */
    protected $DESTINATION_IE;
    /**
     * @var string
     */
    protected $DESTINATION_IM;
    /**
     * @var string
     */
    protected $DESTINATION_TAXTYPE;
    /**
     * @var string
     */
    protected $DESTINATION_STREET;
    /**
     * @var string
     */
    protected $DESTINATION_NUMBER;
    /**
     * @var string
     */
    protected $DESTINATION_COMPLEMENT;
    /**
     * @var string
     */
    protected $DESTINATION_DISTRICT;
    /**
     * @var string
     */
    protected $DESTINATION_CITY;
    /**
     * @var string
     */
    protected $DESTINATION_UF;
    /**
     * @var string
     */
    protected $DESTINATION_ZIPCODE;
    /**
     * @var int
     */
    protected $DESTINATION_PHONE;
    /**
     * @var string
     */
    protected $DESTINATION_EMAIL;
    /**
     * @var array
     */
    protected $DESTINATION_EMAIL_SEND;

    /**
     * Get the value of DESTINATION_NAME
     *
     * @return  string
     */ 
    public function getDESTINATION_NAME()
    {
        return $this->DESTINATION_NAME;
    }

    /**
     * Set the value of DESTINATION_NAME
     *
     * @param  string  $DESTINATION_NAME
     *
     
     */ 
    public function setDESTINATION_NAME(string $DESTINATION_NAME)
    {
        $this->DESTINATION_NAME = $DESTINATION_NAME;
    }

    /**
     * Get the value of DESTINATION_TAXID
     *
     * @return  int
     */ 
    public function getDESTINATION_TAXID()
    {
        return $this->DESTINATION_TAXID;
    }

    /**
     * Set the value of DESTINATION_TAXID
     * CPF ou CNPJ
     * 
     * @param  int  $DESTINATION_TAXID
     *
     */ 
    public function setDESTINATION_TAXID(string $DESTINATION_TAXID)
    {
        $this->DESTINATION_TAXID = $DESTINATION_TAXID;
    }

    /**
     * Get the value of DESTINATION_IE
     * 
     * @return  string
     */ 
    public function getDESTINATION_IE()
    {
        return $this->DESTINATION_IE;
    }

    /**
     * Set the value of DESTINATION_IE
     * Inscrição Estadual
     * 
     * @param  string  $DESTINATION_IE
     *
     */ 
    public function setDESTINATION_IE(string $DESTINATION_IE)
    {
        $this->DESTINATION_IE = $DESTINATION_IE;
    }

    /**
     * Get the value of DESTINATION_IM
     *
     * @return  string
     */ 
    public function getDESTINATION_IM()
    {
        return $this->DESTINATION_IM;
    }

    /**
     * Set the value of DESTINATION_IM
     * Inscrição Municipal
     * 
     * @param  string  $DESTINATION_IM
     *
     */ 
    public function setDESTINATION_IM(string $DESTINATION_IM)
    {
        $this->DESTINATION_IM = $DESTINATION_IM;
    }

    /**
     * Get the value of DESTINATION_TAXTYPE
     *
     * @return  string
     */ 
    public function getDESTINATION_TAXTYPE()
    {
        return $this->DESTINATION_TAXTYPE;
    }

    /**
     * Set the value of DESTINATION_TAXTYPE
     * F = Física, J = Jurídica, E = Estrangeiro
     *  
     * @param  string  $DESTINATION_TAXTYPE
     *
     */ 
    public function setDESTINATION_TAXTYPE(string $DESTINATION_TAXTYPE)
    {
        $this->DESTINATION_TAXTYPE = $DESTINATION_TAXTYPE;        
    }

    /**
     * Get the value of DESTINATION_STREET
     *
     * @return  string
     */ 
    public function getDESTINATION_STREET()
    {
        return $this->DESTINATION_STREET;
    }

    /**
     * Set the value of DESTINATION_STREET
     * Logradouro
     * 
     * @param  string  $DESTINATION_STREET
     *
     */ 
    public function setDESTINATION_STREET(string $DESTINATION_STREET)
    {
        $this->DESTINATION_STREET = $DESTINATION_STREET;
    }

    /**
     * Get the value of DESTINATION_NUMBER
     *
     * @return  string
     */ 
    public function getDESTINATION_NUMBER()
    {
        return $this->DESTINATION_NUMBER;
    }

    /**
     * Set the value of DESTINATION_NUMBER
     *
     * @param  string  $DESTINATION_NUMBER
     *
     
     */ 
    public function setDESTINATION_NUMBER(string $DESTINATION_NUMBER)
    {
        $this->DESTINATION_NUMBER = $DESTINATION_NUMBER;
    }

    /**
     * Get the value of DESTINATION_COMPLEMENT
     *
     * @return  string
     */ 
    public function getDESTINATION_COMPLEMENT()
    {
        return $this->DESTINATION_COMPLEMENT;
    }

    /**
     * Set the value of DESTINATION_COMPLEMENT
     *
     * @param  string  $DESTINATION_COMPLEMENT
     *
     
     */ 
    public function setDESTINATION_COMPLEMENT(string $DESTINATION_COMPLEMENT)
    {
        $this->DESTINATION_COMPLEMENT = $DESTINATION_COMPLEMENT;
    }

    /**
     * Get the value of DESTINATION_DISTRICT
     *
     * @return  string
     */ 
    public function getDESTINATION_DISTRICT()
    {
        return $this->DESTINATION_DISTRICT;
    }

    /**
     * Set the value of DESTINATION_DISTRICT
     * Bairro
     * 
     * @param  string  $DESTINATION_DISTRICT
     *
     
     */ 
    public function setDESTINATION_DISTRICT(string $DESTINATION_DISTRICT)
    {
        $this->DESTINATION_DISTRICT = $DESTINATION_DISTRICT;
    }

    /**
     * Get the value of DESTINATION_CITY
     *
     * @return  string
     */ 
    public function getDESTINATION_CITY()
    {
        return $this->DESTINATION_CITY;
    }

    /**
     * Set the value of DESTINATION_CITY
     * Cidade
     * 
     * @param  string  $DESTINATION_CITY
     *
     
     */ 
    public function setDESTINATION_CITY(string $DESTINATION_CITY)
    {
        $this->DESTINATION_CITY = $DESTINATION_CITY;
    }

    /**
     * Get the value of DESTINATION_UF
     *
     * @return  int
     */ 
    public function getDESTINATION_UF()
    {
        return $this->DESTINATION_UF;
    }

    /**
     * Set the value of DESTINATION_UF
     *
     * @param  int  $DESTINATION_UF
     *
     */ 
    public function setDESTINATION_UF(string $DESTINATION_UF)
    {
        $this->DESTINATION_UF = $DESTINATION_UF;        
    }

    /**
     * Get the value of DESTINATION_ZIPCODE
     *
     * @return  string
     */ 
    public function getDESTINATION_ZIPCODE()
    {
        return $this->DESTINATION_ZIPCODE;
    }

    /**
     * Set the value of DESTINATION_ZIPCODE
     * CEP
     *  
     * @param  string  $DESTINATION_ZIPCODE
     *
     */ 
    public function setDESTINATION_ZIPCODE(string $DESTINATION_ZIPCODE)
    {
        $this->DESTINATION_ZIPCODE = $DESTINATION_ZIPCODE;
    }

    /**
     * Get the value of DESTINATION_PHONE
     *
     * @return  int
     */ 
    public function getDESTINATION_PHONE()
    {
        return $this->DESTINATION_PHONE;
    }

    /**
     * Set the value of DESTINATION_PHONE
     *
     * @param  int  $DESTINATION_PHONE
     *
     */ 
    public function setDESTINATION_PHONE(string $DESTINATION_PHONE)
    {
        $this->DESTINATION_PHONE = $DESTINATION_PHONE;
    }

    /**
     * Get the value of DESTINATION_EMAIL
     *
     * @return  string
     */ 
    public function getDESTINATION_EMAIL()
    {
        return $this->DESTINATION_EMAIL;
    }

    /**
     * Set the value of DESTINATION_EMAIL
     * 
     * @param  string  $DESTINATION_EMAIL
     *
     */ 
    public function setDESTINATION_EMAIL(string $DESTINATION_EMAIL)
    {
        $this->DESTINATION_EMAIL = $DESTINATION_EMAIL;        
    }

    /**
     * Get the value of DESTINATION_EMAIL_SEND
     * Esse parâmetro é um Array que irá conter os e-mails que será enviado após a nota ser autorizada ou cancelada. 
     * OBS: Para cada e-mail que será enviado, passe os parâmetros abaixo alterando o índice em +1 para cada e-mail
     * 
     * @return  array
     */ 
    public function getDESTINATION_EMAIL_SEND()
    {
        return $this->DESTINATION_EMAIL_SEND;
    }

    /**
     * Set the value of DESTINATION_EMAIL_SEND
     * Esse parâmetro é um Array que irá conter os e-mails que será enviado após a nota ser autorizada ou cancelada. 
     * OBS: Para cada e-mail que será enviado, passe os parâmetros abaixo alterando o índice em +1 para cada e-mail
     * 
     * @param  array  $DESTINATION_EMAIL_SEND
     *
     */ 
    public function setDESTINATION_EMAIL_SEND(array $DESTINATION_EMAIL_SEND)
    {
        $this->DESTINATION_EMAIL_SEND = $DESTINATION_EMAIL_SEND;
    }
}