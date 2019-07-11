<?php namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Document extends Resource
{
    /**
     * @var float
     */
    protected $DOCUMENT_BASEVALUE;
    /**
     * @var string
     */
    protected $DOCUMENT_DESCRIPTION;
    /**
     * @var string
     */
    protected $DOCUMENT_COMPETENCE;
    /**
     * @var int
     */
    protected $DOCUMENT_CNAE;
    /**
     * @var string
     */
    protected $DOCUMENT_ISSUE_DATE;

    public function __construct()
    {
        $date = date('Y-m-d H:i:s', strtotime('+30 days'));
        $currentDate = date('Y-m-d H:i:s');
        $this->setDOCUMENT_ISSUE_DATE($date);    
        $this->setDOCUMENT_COMPETENCE($currentDate);    
    }
    
    /**
     * Get the value of DOCUMENT_BASEVALUE
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
     *
     */ 
    public function setDOCUMENT_BASEVALUE(float $DOCUMENT_BASEVALUE)
    {
        $this->DOCUMENT_BASEVALUE = $DOCUMENT_BASEVALUE;
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
     * Get the value of DOCUMENT_COMPETENCE
     *
     * @return  string
     */ 
    public function getDOCUMENT_COMPETENCE()
    {
        return $this->DOCUMENT_COMPETENCE;
    }

    /**
     * Competência. Utilizar padrão: YYYY-mm-dd
     *
     * @param  string  $DOCUMENT_COMPETENCE
     */ 
    public function setDOCUMENT_COMPETENCE(string $DOCUMENT_COMPETENCE)
    {
        $this->DOCUMENT_COMPETENCE = $DOCUMENT_COMPETENCE;
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
     * 	CNAE. Documentação: http://www.cnae.ibge.gov.br
     *
     * @param  int  $DOCUMENT_CNAE
     */ 
    public function setDOCUMENT_CNAE(int $DOCUMENT_CNAE)
    {
        $this->DOCUMENT_CNAE = $DOCUMENT_CNAE;
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
     */ 
    public function setDOCUMENT_ISSUE_DATE(string $DOCUMENT_ISSUE_DATE)
    {
        $this->DOCUMENT_ISSUE_DATE = $DOCUMENT_ISSUE_DATE;
    }
}
