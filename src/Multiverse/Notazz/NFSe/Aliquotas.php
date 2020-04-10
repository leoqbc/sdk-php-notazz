<?php

namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Aliquotas extends Resource
{
    /**
     * @var float
     */
    protected $cofins;
    /**
     * @var float
     */
    protected $csll;
    /**
     * @var float
     */
    protected $inss;
    /**
     * @var float
     */
    protected $ir;
    /**
     * @var float
     */
    protected $pis;
    /**
     * @var float
     */
    protected $iss;

    /**
     * @param float $cofins
     * @param float $csll
     * @param float $inss
     * @param float $ir
     * @param float $pis
     * @param float $iss
     */
    public function __construct(
        float $cofins = null,
        float $csll = null,
        float $inss = null,
        float $ir = null,
        float $pis = null,
        float $iss = null
    ) {
        $this->cofins = $cofins;
        $this->csll = $csll;
        $this->inss = $inss;
        $this->ir = $ir;
        $this->pis = $pis;
        $this->iss = $iss;
    }
    /**
     * Get The value of cofins
     *
     * @return float
     */
    public function getCofins()
    {
        return $this->cofins;
    }

    /**
     * set the value of cofins
     *
     * @param float $cofins
     */
    public function setCofins(float $cofins)
    {
        $this->cofins = $cofins;
    }

    /**
     * Get The value of csll
     *
     * @return float
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * set the value of csll
     *
     * @param float $csll
     */
    public function setCsll(float $csll)
    {
        $this->csll = $csll;
    }

    /**
     * Get The value of inss
     *
     * @return float
     */
    public function getInss()
    {
        return $this->inss;
    }

    /**
     * set the value of inss
     *
     * @param float $inss
     */
    public function setInss(float $inss)
    {
        $this->INSS = $inss;
    }

    /**
     * Get The value of ir
     *
     * @return float
     */
    public function getIr()
    {
        return $this->ir;
    }

    /**
     * set the value of ir
     *
     * @param float $ir
     */
    public function setIr(float $ir)
    {
        $this->ir = $ir;
    }

    /**
     * Get The value of pis
     *
     * @return float
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * set the value of pis
     *
     * @param float $pis
     */
    public function setPis(float $pis)
    {
        $this->pis = $pis;
    }

    /**
     * Get The value of iss
     *
     * @return float
     */
    public function getIss()
    {
        return $this->iss;
    }

    /**
     * set the value of iss
     *
     * @param float $iss
     */
    public function setIss(float $iss)
    {
        $this->iss = $iss;
    }
}
