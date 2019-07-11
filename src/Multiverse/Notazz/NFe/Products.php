<?php namespace Multiverse\Notazz\NFe;

use Multiverse\Notazz\Resource;

class Products extends Resource
{
    /**
     * @var array
     */
    protected $document_product = [];

    /**
     * Adiciona produtos
     *
     * @param ProductItem
     */
    public function addItem(ProductItem $item)
    {
        $this->document_product[] = $item->toArray();
    }
}
