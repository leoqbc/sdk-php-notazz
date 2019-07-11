<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ProductItem extends Resource
{
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_COD = 0;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_TAX_COD;
    /**
     * @var mixed
     */
    protected $DOCUMENT_PRODUCT_EAN;
    /**
     * @var string
     */
    protected $DOCUMENT_PRODUCT_NAME;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_QTD;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_UNITARY_VALUE;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_NCM;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_CEST;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_CFOP;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_DISCOUNT;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_ICMS_CST;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_ICMS_ALIQUOTA;
    /**
     * @var int
     */
    protected $DOCUMENT_PRODUCT_IPI_CST;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_IPI_ALIQUOTA;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_PIS_ALIQUOTA;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_COFINS_CST;
    /**
     * @var float
     */
    protected $DOCUMENT_PRODUCT_COFINS_ALIQUOTA;


    public function fillRequired(int $cod, string $name, int $qtd, float $unitaryValue)
    {
        $this->DOCUMENT_PRODUCT_COD = $cod;
        $this->DOCUMENT_PRODUCT_NAME = $name;
        $this->DOCUMENT_PRODUCT_QTD = $qtd;
        $this->DOCUMENT_PRODUCT_UNITARY_VALUE = $unitaryValue;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COD
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_COD()
    {
        return $this->DOCUMENT_PRODUCT_COD;
    }

    /**
     * Cód do produto
     *
     * @param  int  $DOCUMENT_PRODUCT_COD
     */ 
    public function setDOCUMENT_PRODUCT_COD(int $DOCUMENT_PRODUCT_COD)
    {
        $this->DOCUMENT_PRODUCT_COD = $DOCUMENT_PRODUCT_COD;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_TAX_COD
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_TAX_COD()
    {
        return $this->DOCUMENT_PRODUCT_TAX_COD;
    }

    /**
     * Cód fiscal do produto (código da logística)
     *
     * @param  int  $DOCUMENT_PRODUCT_TAX_COD
     */ 
    public function setDOCUMENT_PRODUCT_TAX_COD(int $DOCUMENT_PRODUCT_TAX_COD)
    {
        $this->DOCUMENT_PRODUCT_TAX_COD = $DOCUMENT_PRODUCT_TAX_COD;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_EAN
     *
     * @return  string
     */ 
    public function getDOCUMENT_PRODUCT_EAN()
    {
        return $this->DOCUMENT_PRODUCT_EAN;
    }

    /**
     * Código de barras
     *
     * @param  mixed  $DOCUMENT_PRODUCT_EAN
     */ 
    public function setDOCUMENT_PRODUCT_EAN($DOCUMENT_PRODUCT_EAN)
    {
        $this->DOCUMENT_PRODUCT_EAN = $DOCUMENT_PRODUCT_EAN;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_NAME
     *
     * @return  string
     */ 
    public function getDOCUMENT_PRODUCT_NAME()
    {
        return $this->DOCUMENT_PRODUCT_NAME;
    }

    /**
     * Nome do produto
     *
     * @param  string  $DOCUMENT_PRODUCT_NAME
     */ 
    public function setDOCUMENT_PRODUCT_NAME(string $DOCUMENT_PRODUCT_NAME)
    {
        $this->DOCUMENT_PRODUCT_NAME = $DOCUMENT_PRODUCT_NAME;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_QTD
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_QTD()
    {
        return $this->DOCUMENT_PRODUCT_QTD;
    }

    /**
     * Quantidade de itens
     *
     * @param  int  $DOCUMENT_PRODUCT_QTD
     */ 
    public function setDOCUMENT_PRODUCT_QTD(int $DOCUMENT_PRODUCT_QTD)
    {
        $this->DOCUMENT_PRODUCT_QTD = $DOCUMENT_PRODUCT_QTD;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_UNITARY_VALUE
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_UNITARY_VALUE()
    {
        return $this->DOCUMENT_PRODUCT_UNITARY_VALUE;
    }

    /**
     * Valor unitário do item
     *
     * @param  float  $DOCUMENT_PRODUCT_UNITARY_VALUE
     */ 
    public function setDOCUMENT_PRODUCT_UNITARY_VALUE(float $DOCUMENT_PRODUCT_UNITARY_VALUE)
    {
        $this->DOCUMENT_PRODUCT_UNITARY_VALUE = $DOCUMENT_PRODUCT_UNITARY_VALUE;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_NCM
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_NCM()
    {
        return $this->DOCUMENT_PRODUCT_NCM;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_NCM
     *
     * @param  int  $DOCUMENT_PRODUCT_NCM
     */ 
    public function setDOCUMENT_PRODUCT_NCM(int $DOCUMENT_PRODUCT_NCM)
    {
        $this->DOCUMENT_PRODUCT_NCM = $DOCUMENT_PRODUCT_NCM;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_CEST
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_CEST()
    {
        return $this->DOCUMENT_PRODUCT_CEST;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_CEST
     *
     * @param  int  $DOCUMENT_PRODUCT_CEST
     */ 
    public function setDOCUMENT_PRODUCT_CEST(int $DOCUMENT_PRODUCT_CEST)
    {
        $this->DOCUMENT_PRODUCT_CEST = $DOCUMENT_PRODUCT_CEST;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_CFOP
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_CFOP()
    {
        return $this->DOCUMENT_PRODUCT_CFOP;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_CFOP
     *
     * @param  int  $DOCUMENT_PRODUCT_CFOP
     */ 
    public function setDOCUMENT_PRODUCT_CFOP(int $DOCUMENT_PRODUCT_CFOP)
    {
        $this->DOCUMENT_PRODUCT_CFOP = $DOCUMENT_PRODUCT_CFOP;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_DISCOUNT
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_DISCOUNT()
    {
        return $this->DOCUMENT_PRODUCT_DISCOUNT;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_DISCOUNT
     *
     * @param  float  $DOCUMENT_PRODUCT_DISCOUNT
     */ 
    public function setDOCUMENT_PRODUCT_DISCOUNT(float $DOCUMENT_PRODUCT_DISCOUNT)
    {
        $this->DOCUMENT_PRODUCT_DISCOUNT = $DOCUMENT_PRODUCT_DISCOUNT;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_ICMS_CST
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_ICMS_CST()
    {
        return $this->DOCUMENT_PRODUCT_ICMS_CST;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_ICMS_CST
     *
     * @param  int  $DOCUMENT_PRODUCT_ICMS_CST
     */ 
    public function setDOCUMENT_PRODUCT_ICMS_CST(int $DOCUMENT_PRODUCT_ICMS_CST)
    {
        $this->DOCUMENT_PRODUCT_ICMS_CST = $DOCUMENT_PRODUCT_ICMS_CST;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_ICMS_ALIQUOTA
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_ICMS_ALIQUOTA()
    {
        return $this->DOCUMENT_PRODUCT_ICMS_ALIQUOTA;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_ICMS_ALIQUOTA
     *
     * @param  float  $DOCUMENT_PRODUCT_ICMS_ALIQUOTA
     */ 
    public function setDOCUMENT_PRODUCT_ICMS_ALIQUOTA(float $DOCUMENT_PRODUCT_ICMS_ALIQUOTA)
    {
        $this->DOCUMENT_PRODUCT_ICMS_ALIQUOTA = $DOCUMENT_PRODUCT_ICMS_ALIQUOTA;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_IPI_CST
     *
     * @return  int
     */ 
    public function getDOCUMENT_PRODUCT_IPI_CST()
    {
        return $this->DOCUMENT_PRODUCT_IPI_CST;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_IPI_CST
     *
     * @param  int  $DOCUMENT_PRODUCT_IPI_CST
     */ 
    public function setDOCUMENT_PRODUCT_IPI_CST(int $DOCUMENT_PRODUCT_IPI_CST)
    {
        $this->DOCUMENT_PRODUCT_IPI_CST = $DOCUMENT_PRODUCT_IPI_CST;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_IPI_ALIQUOTA
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_IPI_ALIQUOTA()
    {
        return $this->DOCUMENT_PRODUCT_IPI_ALIQUOTA;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_IPI_ALIQUOTA
     *
     * @param  float  $DOCUMENT_PRODUCT_IPI_ALIQUOTA
     */ 
    public function setDOCUMENT_PRODUCT_IPI_ALIQUOTA(float $DOCUMENT_PRODUCT_IPI_ALIQUOTA)
    {
        $this->DOCUMENT_PRODUCT_IPI_ALIQUOTA = $DOCUMENT_PRODUCT_IPI_ALIQUOTA;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_PIS_ALIQUOTA
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_PIS_ALIQUOTA()
    {
        return $this->DOCUMENT_PRODUCT_PIS_ALIQUOTA;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_PIS_ALIQUOTA
     *
     * @param  float  $DOCUMENT_PRODUCT_PIS_ALIQUOTA
     */ 
    public function setDOCUMENT_PRODUCT_PIS_ALIQUOTA(float $DOCUMENT_PRODUCT_PIS_ALIQUOTA)
    {
        $this->DOCUMENT_PRODUCT_PIS_ALIQUOTA = $DOCUMENT_PRODUCT_PIS_ALIQUOTA;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COFINS_CST
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_COFINS_CST()
    {
        return $this->DOCUMENT_PRODUCT_COFINS_CST;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_COFINS_CST
     *
     * @param  float  $DOCUMENT_PRODUCT_COFINS_CST
     */ 
    public function setDOCUMENT_PRODUCT_COFINS_CST(float $DOCUMENT_PRODUCT_COFINS_CST)
    {
        $this->DOCUMENT_PRODUCT_COFINS_CST = $DOCUMENT_PRODUCT_COFINS_CST;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COFINS_ALIQUOTA
     *
     * @return  float
     */ 
    public function getDOCUMENT_PRODUCT_COFINS_ALIQUOTA()
    {
        return $this->DOCUMENT_PRODUCT_COFINS_ALIQUOTA;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_COFINS_ALIQUOTA
     *
     * @param  float  $DOCUMENT_PRODUCT_COFINS_ALIQUOTA
     */ 
    public function setDOCUMENT_PRODUCT_COFINS_ALIQUOTA(float $DOCUMENT_PRODUCT_COFINS_ALIQUOTA)
    {
        $this->DOCUMENT_PRODUCT_COFINS_ALIQUOTA = $DOCUMENT_PRODUCT_COFINS_ALIQUOTA;
    }
}