<?php namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Service extends Resource
{
    /**
     * @var int
     */
    protected $SERVICE_LIST_LC116;
    /**
     * @var int
     */
    protected $WITHHELD_ISS;
    /**
     * @var int
     */
    protected $CITY_SERVICE_CODE;
    /**
     * @var string
     */
    protected $CITY_SERVICE_DESCRIPTION;
    /**
     * @var array
     */
    protected $ALIQUOTAS;

    /**
     * Get the value of SERVICE_LIST_LC116
     *
     * @return  int
     */ 
    public function getSERVICE_LIST_LC116()
    {
        return $this->SERVICE_LIST_LC116;
    }

    /**
     * Item da Lista de Serviço da LC 116.
     *
     * @param  int  $SERVICE_LIST_LC116
     */ 
    public function setSERVICE_LIST_LC116(int $SERVICE_LIST_LC116)
    {
        $this->SERVICE_LIST_LC116 = $SERVICE_LIST_LC116;
    }

    /**
     * Get the value of WITHHELD_ISS
     *
     * @return  int
     */ 
    public function getWITHHELD_ISS()
    {
        return $this->WITHHELD_ISS;
    }

    /**
     * ISS retido na fonte. 1 = Retido e 0 = Não retido.
     *
     * @param  int  $WITHHELD_ISS
     */ 
    public function setWITHHELD_ISS(int $WITHHELD_ISS)
    {
        $this->WITHHELD_ISS = $WITHHELD_ISS;
    }

    /**
     * Get the value of CITY_SERVICE_CODE
     *
     * @return  int
     */ 
    public function getCITY_SERVICE_CODE()
    {
        return $this->CITY_SERVICE_CODE;
    }

    /**
     * Código de serviço do município
     *
     * @param  int  $CITY_SERVICE_CODE
     */ 
    public function setCITY_SERVICE_CODE(int $CITY_SERVICE_CODE)
    {
        $this->CITY_SERVICE_CODE = $CITY_SERVICE_CODE;
    }

    /**
     * Get the value of CITY_SERVICE_DESCRIPTION
     *
     * @return  string
     */ 
    public function getCITY_SERVICE_DESCRIPTION()
    {
        return $this->CITY_SERVICE_DESCRIPTION;
    }

    /**
     * Descrição do serviço do município
     *
     * @param  string  $CITY_SERVICE_DESCRIPTION
     */ 
    public function setCITY_SERVICE_DESCRIPTION(string $CITY_SERVICE_DESCRIPTION)
    {
        $this->CITY_SERVICE_DESCRIPTION = $CITY_SERVICE_DESCRIPTION;
    }

    /**
     * Get the value of ALIQUOTAS
     *
     * @return  array
     */ 
    public function getALIQUOTAS()
    {
        return $this->ALIQUOTAS;
    }

    /**
     * Set the value of ALIQUOTAS
     *
     * @param  array  $ALIQUOTAS
     */ 
    public function setALIQUOTAS(Aliquotas $aliquotas)
    {
        $this->ALIQUOTAS = $aliquotas->toArray();
    }
}