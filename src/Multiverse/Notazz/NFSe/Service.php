<?php namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Service extends Resource
{
    /**
     * @var int
     */
    protected $service_list_lc116;
    /**
     * @var int
     */
    protected $withheld_iss;
    /**
     * @var int
     */
    protected $city_service_code;
    /**
     * @var string
     */
    protected $city_service_description;
    /**
     * @var array
     */
    protected $aliquotas;

    /**
     * getThe value of service_list_lc116
     *
     * @return  int
     */
    public function getServiceListLc116()
    {
        return $this->service_list_lc116;
    }

    /**
     * Item da Lista de Serviço da lc 116.
     * Ex: 17.06
     *
     * @param  int  $service_list_lc116
     */
    public function setServiceListLc116(float $service_list_lc116)
    {
        $this->service_list_lc116 = $service_list_lc116;
    }

    /**
     * Get The value of withheld_iss
     *
     * @return  int
     */
    public function getWithheldIss()
    {
        return $this->withheld_iss;
    }

    /**
     * ISS retido na fonte. 1 = Retido e 0 = Não retido.
     *
     * @param  int  $withheld_iss
     */
    public function setWithheldIss(int $withheld_iss)
    {
        $this->withheld_iss = $withheld_iss;
    }

    /**
     * getThe value of city_service_code
     *
     * @return  int
     */
    public function getCityServiceCode()
    {
        return $this->city_service_code;
    }

    /**
     * Código de serviço do município
     *
     * @param  int  $city_service_code
     */
    public function setCityServiceCode(int $city_service_code)
    {
        $this->city_service_code = $city_service_code;
    }

    /**
     * getThe value of city_service_description
     *
     * @return  string
     */
    public function getCityServiceDescription()
    {
        return $this->city_service_description;
    }

    /**
     * Descrição do serviço do município
     *
     * @param  string  $city_service_description
     */
    public function setCityServiceDescription(string $city_service_description)
    {
        $this->city_service_description = $city_service_description;
    }

    /**
     * getThe value of aliquotas
     *
     * @return  array
     */
    public function getAliquotas()
    {
        return $this->aliquotas;
    }

    /**
     * Set the value of aliquotas
     *
     * @param  array  $aliquotas
     */
    public function setAliquotas(Aliquotas $aliquotas)
    {
        $this->aliquotas = $aliquotas->toArray();
    }
}
