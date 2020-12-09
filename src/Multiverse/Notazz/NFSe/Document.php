<?php

namespace Multiverse\Notazz\NFSe;

use Multiverse\Notazz\Resource;

class Document extends Resource
{
    /**
     * @var float
     */
    protected $document_basevalue;
    /**
     * @var string
     */
    protected $document_description;
    /**
     * @var string
     */
    protected $document_competence;
    /**
     * @var int
     */
    protected $document_cnae;
    /**
     * @var string
     */
    protected $document_issue_date;

    public function __construct()
    {
        $currentDate = date('Y-m-d H:i:s');
        $this->setDocumentIssueDate($currentDate);
        $this->setDocumentCompetence($currentDate);
    }

    /**
     * Get the value of DOCUMENT_BASEVALUE
     *
     * @return float
     */
    public function getDocumentBasevalue()
    {
        return $this->document_basevalue;
    }

    /**
     * Valor da nota fiscal
     *
     * @param float $document_basevalue
     */
    public function setDocumentBasevalue(float $document_basevalue)
    {
        $this->document_basevalue = $document_basevalue;
    }

    /**
     * Get the value of DOCUMENT_DESCRIPTION
     *
     * @return string
     */
    public function getDocumentDescription()
    {
        return $this->document_description;
    }

    /**
     * Descrição da nota fiscal
     *
     * @param string $document_description
     */
    public function setDocumentDescription(string $document_description)
    {
        $this->document_description = $document_description;
    }

    /**
     * Get the value of DOCUMENT_COMPETENCE
     *
     * @return string
     */
    public function getDocumentCompetence()
    {
        return $this->document_competence;
    }

    /**
     * Competência. Utilizar padrão: YYYY-mm-dd
     *
     * @param string $document_competence
     */
    public function setDocumentCompetence(string $document_competence)
    {
        $this->document_competence = $document_competence;
    }

    /**
     * Get the value of DOCUMENT_CNAE
     *
     * @return int
     */
    public function getDocumentCnae()
    {
        return $this->document_cnae;
    }

    /**
     *  CNAE. Documentação: http://www.cnae.ibge.gov.br
     *
     * @param int $document_cnae
     */
    public function setDocumentCnae(int $document_cnae)
    {
        $this->document_cnae = $document_cnae;
    }

    /**
     * Get the value of DOCUMENT_ISSUE_DATE
     *
     * @return string
     */
    public function getDocumentIssueDate()
    {
        return $this->document_issue_date;
    }

    /**
     * Data de emissão automática da nota fiscal (por padrão é a data atual) formato YYYY-mm-dd HH:ii:ss
     *
     * @param string $document_issue_date
     */
    public function setDocumentIssueDate(string $document_issue_date)
    {
        $this->document_issue_date = $document_issue_date;
    }
}
