<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class Document extends Resource
{
    /**
     * @var float
     */
    protected $DOCUMENT_BASEVALUE;
    /**
     * @var int
     */
    protected $DOCUMENT_CNAE;
    /**
     * @var int
     */
    protected $DOCUMENT_GOAL;
    /**
     * @var int
     */
    protected $DOCUMENT_REFERENCED;
    /**
     * @var int
     */
    protected $DOCUMENT_OPERATION_TYPE;
    /**
     * @var string
     */
    protected $DOCUMENT_NATURE_OPERATION;
    /**
     * @var string
     */
    protected $DOCUMENT_DESCRIPTION;
    /**
     * @var string
     */
    protected $DOCUMENT_ISSUE_DATE;

    public function __construct()
    {
        $date = date('Y-m-d H:i:s', strtotime('+30 days'));
        
        $this->setDOCUMENT_ISSUE_DATE($date);    
    }

    /**
     *
     * @return  float
     */
    public function getDOCUMENT_BASEVALUE()
    {
        return $this->DOCUMENT_BASEVALUE;
    }

    /**
     * Valor da nota fiscal
     *
     * @param  float  $DOCUMENT_BASEVALUE
     */
    public function setDOCUMENT_BASEVALUE(float $DOCUMENT_BASEVALUE)
    {
        $this->DOCUMENT_BASEVALUE = $DOCUMENT_BASEVALUE;
    }

    /**
     * Get the value of DOCUMENT_CNAE
     *
     * @return  int
     */
    public function getDOCUMENT_CNAE()
    {
        return $this->DOCUMENT_CNAE;
    }

    /**
     * CNAE. Documentação: http://www.cnae.ibge.gov.br
     *
     * @param  int  $DOCUMENT_CNAE
     *
     * @return  self
     */
    public function setDOCUMENT_CNAE(int $DOCUMENT_CNAE)
    {
        $this->DOCUMENT_CNAE = $DOCUMENT_CNAE;

        return $this;
    }

    /**
     * Get the value of DOCUMENT_GOAL
     *
     * @return  int
     */
    public function getDOCUMENT_GOAL()
    {
        return $this->DOCUMENT_GOAL;
    }

    /**
     * Finalidade da Nota Fiscal. 1 = Normal, 2 = Complementar, 3 = Ajuste, 4 = Devolução/Retorno
     *
     * @param  int  $DOCUMENT_GOAL
     */
    public function setDOCUMENT_GOAL(int $DOCUMENT_GOAL)
    {
        $this->DOCUMENT_GOAL = $DOCUMENT_GOAL;
    }

    /**
     * Get the value of DOCUMENT_REFERENCED
     *
     * @return  int
     */
    public function getDOCUMENT_REFERENCED()
    {
        return $this->DOCUMENT_REFERENCED;
    }

    /**
     * Chave da nota fiscal referenciada. Utilizar quando DOCUMENT_GOAL for diferente de 1
     *
     * @param  int  $DOCUMENT_REFERENCED
     */
    public function setDOCUMENT_REFERENCED(int $DOCUMENT_REFERENCED)
    {
        $this->DOCUMENT_REFERENCED = $DOCUMENT_REFERENCED;
    }

    /**
     * Get the value of DOCUMENT_OPERATION_TYPE
     *
     * @return  int
     */
    public function getDOCUMENT_OPERATION_TYPE()
    {
        return $this->DOCUMENT_OPERATION_TYPE;
    }

    /**
     * Tipo de Operação. 0 = Entrada, 1 = Saída
     *
     * @param  int  $DOCUMENT_OPERATION_TYPE
     */
    public function setDOCUMENT_OPERATION_TYPE(int $DOCUMENT_OPERATION_TYPE)
    {
        $this->DOCUMENT_OPERATION_TYPE = $DOCUMENT_OPERATION_TYPE;
    }

    /**
     * Get the value of DOCUMENT_NATURE_OPERATION
     *
     * @return  string
     */
    public function getDOCUMENT_NATURE_OPERATION()
    {
        return $this->DOCUMENT_NATURE_OPERATION;
    }

    /**
     * Natureza da operação da nota fiscal
     *
     * @param  string  $DOCUMENT_NATURE_OPERATION
     */
    public function setDOCUMENT_NATURE_OPERATION(string $DOCUMENT_NATURE_OPERATION)
    {
        $this->DOCUMENT_NATURE_OPERATION = $DOCUMENT_NATURE_OPERATION;
    }

    /**
     * Get the value of DOCUMENT_DESCRIPTION
     *
     * @return  string
     */
    public function getDOCUMENT_DESCRIPTION()
    {
        return $this->DOCUMENT_DESCRIPTION;
    }

    /**
     * Descrição da nota fiscal
     *
     * @param  string  $DOCUMENT_DESCRIPTION
     */
    public function setDOCUMENT_DESCRIPTION(string $DOCUMENT_DESCRIPTION)
    {
        $this->DOCUMENT_DESCRIPTION = $DOCUMENT_DESCRIPTION;
    }

    /**
     * Get the value of DOCUMENT_ISSUE_DATE
     *
     * @return  string
     */
    public function getDOCUMENT_ISSUE_DATE()
    {
        return $this->DOCUMENT_ISSUE_DATE;
    }

    /**
     * Data de emissão automática da nota fiscal (por padrão é a data atual) formato YYYY-mm-dd HH:ii:ss
     * 
     * @param  string  $DOCUMENT_ISSUE_DATE
     *
     */
    public function setDOCUMENT_ISSUE_DATE(string $DOCUMENT_ISSUE_DATE)
    {
        $this->DOCUMENT_ISSUE_DATE = $DOCUMENT_ISSUE_DATE;
    }
}
