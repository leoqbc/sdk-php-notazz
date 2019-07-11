<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class Products extends Resource
{
    /**
     * @var array
     */
    protected $DOCUMENT_PRODUCT = [];

    /**
     * Adiciona produtos
     * 
     * @param ProductItem
     */
    public function addItem(ProductItem $item)
    {
        $this->DOCUMENT_PRODUCT[] = $item->toArray();
    }
}