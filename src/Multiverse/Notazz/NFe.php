<?php namespace Multiverse\Notazz;

use Multiverse\Notazz\NFe\Document;
use Multiverse\Notazz\NFe\Products;
use Multiverse\Notazz\Destination;
use Multiverse\Notazz\NFe\Shipping;

class NFe
{
    /**
     * @var Document
     */
    protected $document;
    /**
     * @var Destination
     */
    protected $destination;
    /**
     * @var Products
     */
    protected $products;
    /**
     * @var Shipping
     */
    protected $shipping;

    /**
     * @param Destination
     * @param Document
     * @param Product
     */
    public function __construct(
        Destination $destination,
        Document $document,
        Products $products,
        Shipping $shipping = null
    ) {
        $this->document = $document;
        $this->destination = $destination;
        $this->products = $products;
        $this->shipping = $shipping;
    }

    /**
     * @return array
     */
    public function mount() : array
    {
        $merge = array_merge(
            $this->document->toArray(),
            $this->destination->toArray(),
            $this->products->toArray()
        );

        return $merge;
    }


}
