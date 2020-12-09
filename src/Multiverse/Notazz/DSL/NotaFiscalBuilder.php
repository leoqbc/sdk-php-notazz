<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NotaFiscal;
use Multiverse\Notazz\NFe;
use Multiverse\Notazz\NFSe;
use Multiverse\Notazz\DSL\DestinationBuilder;
use Multiverse\Notazz\DSL\DocumentBuilder;
use Multiverse\Notazz\DSL\ProductsBuilder;
use Multiverse\Notazz\DSL\ShippingBuilder;
use GuzzleHttp\Client;

class NotaFiscalBuilder
{
    protected $destination;

    protected $document;

    protected $products;

    protected $shipping;

    protected $current;

    protected $apiKey;

    protected $handler;

    public function __construct()
    {
        $this->handler = new Client();

        $this->destination = new DestinationBuilder();
        $this->document = new DocumentBuilder();
        $this->products = new ProductsBuilder();
        $this->service = new ServiceBuilder();
        $this->shipping = new ShippingBuilder();
    }

    public function setRequestHandler($handler)
    {
        $this->handler = $handler;
        return $this;
    }

    public function key(string $apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function __call($method, $args)
    {
        $arg = $args[0] ?? null;

        $target = $this->current;

        $this->$target->$method($arg);

        return $this;
    }

    public function destination()
    {
        $this->current = 'destination';
        return $this;
    }

    public function document()
    {
        $this->current = 'document';
        return $this;
    }

    public function products()
    {
        $this->current = 'products';
        return $this;
    }

    public function service()
    {
        $this->current = 'service';
        return $this;
    }

    public function shipping()
    {
        $this->current = 'shipping';
        return $this;
    }

    public function isNFE(): bool
    {
        return (bool)$this->document->getDocumentType();
    }

    protected function getNFObject()
    {
        if ($this->isNFE()) {
            return new NFe(
                $this->destination->getInstance(),
                $this->document->getInstance(),
                $this->products->getInstance(),
                $this->shipping->getInstance()
            );
        }
        return new NFSe(
            $this->destination->getInstance(),
            $this->document->getInstance(),
            $this->service->getInstance()
        );
    }

    public function make()
    {
        $nf = $this->getNFObject();

        $notafiscal = new NotaFiscal($this->apiKey, $nf);

        $notafiscal->setHandler($this->handler);

        return $notafiscal->create();
    }

    public function getJson()
    {
        $nf = $this->getNFObject();
        $notafiscal = new NotaFiscal($this->apiKey, $nf);

        return $notafiscal->prepareRequest();
    }
}
