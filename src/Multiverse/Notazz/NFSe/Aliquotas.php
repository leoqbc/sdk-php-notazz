<?php namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Aliquotas extends Resource
{
    /**
     * @var float
     */
    protected $COFINS;
    /**
     * @var float
     */
    protected $CSLL;
    /**
     * @var float
     */
    protected $INSS;
    /**
     * @var float
     */
    protected $IR;
    /**
     * @var float
     */
    protected $PIS;
    /**
     * @var float
     */
    protected $ISS;

    /**
     * @param float $CONFIS
     * @param float $CSLL
     * @param float $INSS
     * @param float $IR
     * @param float $PIS
     * @param float $ISS
     */
    public function __construct(
        float $confis = null,
        float $csll = null,
        float $inss = null,
        float $ir = null,
        float $pis = null,
        float $iss = null
    )
    {
        $this->COFINS = $confis;
        $this->CSLL = $csll;
        $this->INSS = $inss;
        $this->IR = $ir;
        $this->PIS = $pis;
        $this->ISS = $iss;
    }
    /**
     * Get the value of COFINS
     *
     * @return  float
     */ 
    public function getCOFINS()
    {
        return $this->COFINS;
    }

    /**
     * Set the value of COFINS
     *
     * @param  float  $COFINS
     */ 
    public function setCOFINS(float $COFINS)
    {
        $this->COFINS = $COFINS;
    }

    /**
     * Get the value of CSLL
     *
     * @return  float
     */ 
    public function getCSLL()
    {
        return $this->CSLL;
    }

    /**
     * Set the value of CSLL
     *
     * @param  float  $CSLL
     */ 
    public function setCSLL(float $CSLL)
    {
        $this->CSLL = $CSLL;
    }

    /**
     * Get the value of INSS
     *
     * @return  float
     */ 
    public function getINSS()
    {
        return $this->INSS;
    }

    /**
     * Set the value of INSS
     *
     * @param  float  $INSS
     */ 
    public function setINSS(float $INSS)
    {
        $this->INSS = $INSS;
    }

    /**
     * Get the value of IR
     *
     * @return  float
     */ 
    public function getIR()
    {
        return $this->IR;
    }

    /**
     * Set the value of IR
     *
     * @param  float  $IR
     */ 
    public function setIR(float $IR)
    {
        $this->IR = $IR;
    }

    /**
     * Get the value of PIS
     *
     * @return  float
     */ 
    public function getPIS()
    {
        return $this->PIS;
    }

    /**
     * Set the value of PIS
     *
     * @param  float  $PIS
     */ 
    public function setPIS(float $PIS)
    {
        $this->PIS = $PIS;
    }

    /**
     * Get the value of ISS
     *
     * @return  float
     */ 
    public function getISS()
    {
        return $this->ISS;
    }

    /**
     * Set the value of ISS
     *
     * @param  float  $ISS
     */ 
    public function setISS(float $ISS)
    {
        $this->ISS = $ISS;
    }
}