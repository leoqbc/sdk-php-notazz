<?php namespace Multiverse\Notazz;

class NotaFiscal
{
    const API_URL = 'https://app.notazz.com/api';

    /**
     * @var string
     */
    protected $api_key;
    /**
     * @var string
     */
    protected $method;
    /**
     * @var array
     */
    protected $nota;
    /**
     * @var handler
     */
    protected $handler;

    /**
     * @param string
     * @param mixed
     */
    public function __construct(string $apiKey, $nfeType)
    {
        $this->api_key = $apiKey;

        $this->method = 'create_nfe_55';

        if ($nfeType instanceof \Multiverse\Notazz\NFSe) {
            $this->method = 'create_nfse';
        }

        $this->setNota($nfeType);
    }

    /**
     * @param
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param
     */
    protected function setNota($nota)
    {
        $this->nota = $nota->mount();
    }

    /**
     * @return mixed
     */
    protected function sendRequest()
    {
        try {
            $response = $this->handler->request('POST', self::API_URL, [
                'form_params' => ["fields" => $this->prepareRequest()],
                false
            ]);

            $result = json_decode($response->getBody()->getContents());

            if ($result->statusProcessamento === 'erro') {
                throw new ErrorStatusProcessamentoException("Error when generating the invoice: $result->motivo", 400);
            }
            
            return $result;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return $this->sendRequest();
    }

    public function prepareRequest()
    {
        $this->nota['API_KEY'] = $this->api_key;
        $this->nota['METHOD'] = $this->method;

        return json_encode($this->nota);
    }
}

/**
 * NFS-e
 *  - API_KEY
 *  - METHOD
 *  - DESTINATION_NAME
 *  - DESTINATION_TAXID
 *  - DESTINATION_TAXTYPE
 *  - DESTINATION_STREET
 *  - DESTINATION_NUMBER
 *  - DESTINATION_DISTRICT
 *  - DISTINATION_CITY
 *  - DESTINATION_UF
 *  - DESTINATION_ZIPCODE
 *  - DESTINATION_EMAIL_SEND
 *  - DESTINATION_EMAIL
 *  - DESTINATION_PHONE
 *  - DOCUMENT_BASEVALUE
 *  - DOCUMENT_DESCRIPTION
 *  - DOCUMENT_COMPETENCE
 *  - DOCUMENT_ISSUE_DATE
 *
 * NF-e
 *  - API_KEY
 *  - METHOD
 *  - DESTINATION_NAME
 *  - DESTINATION_TAXID
 *  - DESTINATION_TAXTYPE
 *  - DESTINATION_STREET
 *  - DESTINATION_NUMBER
 *  - DESTINATION_DISTRICT
 *  - DISTINATION_CITY
 *  - DESTINATION_UF
 *  - DESTINATION_ZIPCODE
 *  - DESTINATION_EMAIL_SEND
 *  - DESTINATION_EMAIL
 *  - DESTINATION_PHONE
 *  - DOCUMENT_BASEVALUE
 *  - DOCUMENT_DESCRIPTION
 *  - DOCUMENT_ISSUE_DATE
 *  - DOCUMENT_PRODUCT
 *  - DOCUMENT_PRODUCT_COD
 *  - DOCUMENT_PRODUCT_NAME
 *  - DOCUMENT_PRODUCT_QTD
 *  - DOCUMENT_PRODUCT_UNITARY_VALUE
 */
