<?php

namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class Document extends Resource
{
    /**
     * @var float
     */
    protected $document_basevalue;
    /**
     * @var int
     */
    protected $document_cnae;
    /**
     * @var int
     */
    protected $document_goal;
    /**
     * @var int
     */
    protected $document_referenced;
    /**
     * @var int
     */
    protected $document_operation_type;
    /**
     * @var string
     */
    protected $document_nature_operation;
    /**
     * @var string
     */
    protected $document_description;
    /**
     * @var string
     */
    protected $document_issue_date;

    protected $logistics;

    protected $external_id;

    public function __construct()
    {
        $date = date('Y-m-d H:i:s', strtotime('+30 days'));

        $this->setDocumentIssueDate($date);
    }

    /**
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
     * Get the value of DOCUMENT_CNAE
     *
     * @return int
     */
    public function getDocumentCnae()
    {
        return $this->document_cnae;
    }

    /**
     * CNAE. Documentação: http://www.cnae.ibge.gov.br
     *
     * @param int $document_cnae
     *
     * @return self
     */
    public function setDocumentCnae(int $document_cnae)
    {
        $this->document_cnae = $document_cnae;

        return $this;
    }

    /**
     * Get the value of DOCUMENT_GOAL
     *
     * @return int
     */
    public function getDocumentGoal()
    {
        return $this->document_goal;
    }

    /**
     * Finalidade da Nota Fiscal. 1 = Normal, 2 = Complementar, 3 = Ajuste, 4 = Devolução/Retorno
     *
     * @param int $document_goal
     */
    public function setDocumentGoal(int $document_goal)
    {
        $this->document_goal = $document_goal;
    }

    /**
     * Get the value of DOCUMENT_REFERENCED
     *
     * @return int
     */
    public function getDocumentReferenced()
    {
        return $this->document_referenced;
    }

    /**
     * Chave da nota fiscal referenciada. Utilizar quando DOCUMENT_GOAL for diferente de 1
     *
     * @param int $document_referenced
     */
    public function setDocumentReferenced(int $document_referenced)
    {
        $this->document_referenced = $document_referenced;
    }

    /**
     * Get the value of DOCUMENT_OPERATION_TYPE
     *
     * @return int
     */
    public function getDocumentOperationType()
    {
        return $this->document_operation_type;
    }

    /**
     * Tipo de Operação. 0 = Entrada, 1 = Saída
     *
     * @param int $document_operation_type
     */
    public function setDocumentOperationType(int $document_operation_type)
    {
        $this->document_operation_type = $document_operation_type;
    }

    /**
     * Get the value of DOCUMENT_NATURE_OPERATION
     *
     * @return string
     */
    public function getDocumentNatureOperation()
    {
        return $this->document_nature_operation;
    }

    /**
     * Natureza da operação da nota fiscal
     *
     * @param string $document_nature_operation
     */
    public function setDocumentNatureOperation(string $document_nature_operation)
    {
        $this->document_nature_operation = $document_nature_operation;
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

    public function setDocumentLogistics(string $logistics)
    {
        $this->logistics = $logistics;
    }

    public function setDocumentExternalId(string $external_id)
    {
        $this->external_id = $external_id;
    }
}

