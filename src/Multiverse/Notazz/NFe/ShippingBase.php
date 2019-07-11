<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class ShippingBase extends Resource
{
    /**
     * @var int
     */
    protected $DOCUMENT_FRETE_MOD;
    /**
     * @var float
     */
    protected $DOCUMENT_FRETE_VALUE;

    /**
     * @param int $DOCUMENT_FRETE_MOD 0 = Por conta do emitente
     * 1 = Por conta do destinatário remetente
     * 2 = Por conta de terceiros, 9 = Sem frete
     *
     * @param float $DOCUMENT_FRETE_VALUE valor do frete
     */
    public function __construct(int $DOCUMENT_FRETE_MOD, float $DOCUMENT_FRETE_VALUE)
    {
        $this->DOCUMENT_FRETE_MOD = $DOCUMENT_FRETE_MOD;
        $this->DOCUMENT_FRETE_VALUE = $DOCUMENT_FRETE_VALUE;
    }
}
