<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFe\Products;
use Multiverse\Notazz\NFe\ProductItem;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;
use Multiverse\Notazz\DSL\Tools\Formatter;

class ProductsBuilder
{
    protected $products;

    protected $productItem;

    protected $adding;

    public function __construct()
    {
        $this->products = new Products();
    }

    public function __call(string $method, array $args)
    {
        $this->productItem = $this->makeProductItemInstance();

        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDocumentProduct$method";

        if (false === method_exists($this->productItem, $method)) {
            throw new MethodNotFoundException("Method ($method) not found in class " . get_class($this->productItem));
        }

        $this->productItem->$method($args[0]);

        $this->setAdding(true);

        return $this;
    }

    public function add()
    {
        $this->setAdding(true);
        return $this;
    }

    public function save()
    {
        $this->setAdding(false);
        $this->products->addItem($this->productItem);
        $this->productItem = null;
        return $this;
    }

    public function getArray()
    {
        return $this->products->toArray();
    }

    protected function setAdding(bool $adding)
    {
        $this->adding = $adding;
    }

    protected function isAdding(): bool
    {
        return $this->adding;
    }

    protected function makeProductItemInstance(): ProductItem
    {
        if ($this->productItem instanceof ProductItem) {
            return $this->productItem;
        }
        return new ProductItem();
    }

    public function getInstance()
    {
        return $this->products;
    }
}
