<?php

namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ProductItem extends Resource
{
    /**
     * @var int
     */
    protected $document_product_cod;
    /**
     * @var int
     */
    protected $document_product_tax_cod;
    /**
     * @var mixed
     */
    protected $document_product_ean;
    /**
     * @var string
     */
    protected $document_product_name;
    /**
     * @var int
     */
    protected $document_product_qtd;
    /**
     * @var float
     */
    protected $document_product_unitary_value;
    /**
     * @var int
     */
    protected $document_product_ncm;
    /**
     * @var int
     */
    protected $document_product_cest;
    /**
     * @var int
     */
    protected $document_product_cfop;
    /**
     * @var float
     */
    protected $document_product_discount;
    /**
     * @var int
     */
    protected $document_product_icms_cst;
    /**
     * @var float
     */
    protected $document_product_icms_aliquota;
    /**
     * @var int
     */
    protected $document_product_ipi_cst;
    /**
     * @var float
     */
    protected $document_product_ipi_aliquota;
    /**
     * @var float
     */
    protected $document_product_pis_aliquota;
    /**
     * @var float
     */
    protected $document_product_cofins_cst;
    /**
     * @var float
     */
    protected $document_product_cofins_aliquota;


    public function fillRequired(int $cod, string $name, int $qtd, float $unitaryValue)
    {
        $this->document_product_cod = $cod;
        $this->document_product_name = $name;
        $this->document_product_qtd = $qtd;
        $this->document_product_unitary_value = $unitaryValue;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COD
     *
     * @return int
     */
    public function getDocumentProductCod()
    {
        return $this->document_product_cod;
    }

    /**
     * Cód do produto
     *
     * @param int $document_product_cod
     */
    public function setDocumentProductCod(int $document_product_cod)
    {
        $this->document_product_cod = $document_product_cod;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_TAX_COD
     *
     * @return int
     */
    public function getDocumentProductTaxCod()
    {
        return $this->document_product_tax_cod;
    }

    /**
     * Cód fiscal do produto (código da logística)
     *
     * @param int $document_product_tax_cod
     */
    public function setDocumentProductTaxCod(int $document_product_tax_cod)
    {
        $this->document_product_tax_cod = $document_product_tax_cod;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_EAN
     *
     * @return string
     */
    public function getDocumentProductEan()
    {
        return $this->document_product_ean;
    }

    /**
     * Código de barras
     *
     * @param mixed $document_product_ean
     */
    public function setDocumentProductEan($document_product_ean)
    {
        $this->document_product_ean = $document_product_ean;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_NAME
     *
     * @return string
     */
    public function getDocumentProductName()
    {
        return $this->document_product_name;
    }

    /**
     * Nome do produto
     *
     * @param string $document_product_name
     */
    public function setDocumentProductName(string $document_product_name)
    {
        $this->document_product_name = $document_product_name;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_QTD
     *
     * @return int
     */
    public function getDocumentProductQtd()
    {
        return $this->document_product_qtd;
    }

    /**
     * Quantidade de itens
     *
     * @param int $document_product_qtd
     */
    public function setDocumentProductQtd(int $document_product_qtd)
    {
        $this->document_product_qtd = $document_product_qtd;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_UNITARY_VALUE
     *
     * @return float
     */
    public function getDocumentProductUnitaryValue()
    {
        return $this->document_product_unitary_value;
    }

    /**
     * Valor unitário do item
     *
     * @param float $document_product_unitary_value
     */
    public function setDocumentProductUnitaryValue(float $document_product_unitary_value)
    {
        $this->document_product_unitary_value = $document_product_unitary_value;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_NCM
     *
     * @return int
     */
    public function getDocumentProductNcm()
    {
        return $this->document_product_ncm;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_NCM
     *
     * @param int $document_product_ncm
     */
    public function setDocumentProductNcm(int $document_product_ncm)
    {
        $this->document_product_ncm = $document_product_ncm;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_CEST
     *
     * @return int
     */
    public function getDocumentProductCest()
    {
        return $this->document_product_cest;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_CEST
     *
     * @param int $document_product_cest
     */
    public function setDocumentProductCest(int $document_product_cest)
    {
        $this->document_product_cest = $document_product_cest;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_CFOP
     *
     * @return int
     */
    public function getDocumentProductCfop()
    {
        return $this->document_product_cfop;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_CFOP
     *
     * @param int $document_product_cfop
     */
    public function setDocumentProductCfop(int $document_product_cfop)
    {
        $this->document_product_cfop = $document_product_cfop;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_DISCOUNT
     *
     * @return float
     */
    public function getDocumentProductDiscount()
    {
        return $this->document_product_discount;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_DISCOUNT
     *
     * @param float $document_product_discount
     */
    public function setDocumentProductDiscount(float $document_product_discount)
    {
        $this->document_product_discount = $document_product_discount;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_ICMS_CST
     *
     * @return int
     */
    public function getDocumentProductIcmsCst()
    {
        return $this->document_product_icms_cst;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_ICMS_CST
     *
     * @param int $document_product_icms_cst
     */
    public function setDocumentProductIcmsCst(int $document_product_icms_cst)
    {
        $this->document_product_icms_cst = $document_product_icms_cst;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_ICMS_ALIQUOTA
     *
     * @return float
     */
    public function getDocumentProductIcmsAliquota()
    {
        return $this->document_product_icms_aliquota;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_ICMS_ALIQUOTA
     *
     * @param float $document_product_icms_aliquota
     */
    public function setDocumentProductIcmsAliquota(float $document_product_icms_aliquota)
    {
        $this->document_product_icms_aliquota = $document_product_icms_aliquota;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_IPI_CST
     *
     * @return int
     */
    public function getDocumentProductIpiCst()
    {
        return $this->document_product_ipi_cst;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_IPI_CST
     *
     * @param int $document_product_ipi_cst
     */
    public function setDocumentProductIpiCst(int $document_product_ipi_cst)
    {
        $this->document_product_ipi_cst = $document_product_ipi_cst;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_IPI_ALIQUOTA
     *
     * @return float
     */
    public function getDocumentProductIpiAliquota()
    {
        return $this->document_product_ipi_aliquota;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_IPI_ALIQUOTA
     *
     * @param float $document_product_ipi_aliquota
     */
    public function setDocumentProductIpiAliquota(float $document_product_ipi_aliquota)
    {
        $this->document_product_ipi_aliquota = $document_product_ipi_aliquota;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_PIS_ALIQUOTA
     *
     * @return float
     */
    public function getDocumentProductPisAliquota()
    {
        return $this->document_product_pis_aliquota;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_PIS_ALIQUOTA
     *
     * @param float $document_product_pis_aliquota
     */
    public function setDocumentProductPisAliquota(float $document_product_pis_aliquota)
    {
        $this->document_product_pis_aliquota = $document_product_pis_aliquota;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COFINS_CST
     *
     * @return float
     */
    public function getDocumentProductCofinsCst()
    {
        return $this->document_product_cofins_cst;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_COFINS_CST
     *
     * @param float $document_product_cofins_cst
     */
    public function setDocumentProductCofinsCst(float $document_product_cofins_cst)
    {
        $this->document_product_cofins_cst = $document_product_cofins_cst;
    }

    /**
     * Get the value of DOCUMENT_PRODUCT_COFINS_ALIQUOTA
     *
     * @return float
     */
    public function getDocumentProductCofinsAliquota()
    {
        return $this->document_product_cofins_aliquota;
    }

    /**
     * Set the value of DOCUMENT_PRODUCT_COFINS_ALIQUOTA
     *
     * @param float $document_product_cofins_aliquota
     */
    public function setDocumentProductCofinsAliquota(float $document_product_cofins_aliquota)
    {
        $this->document_product_cofins_aliquota = $document_product_cofins_aliquota;
    }
}
