<?php

namespace Multiverse\Notazz\DSL;

use Multiverse\Notazz\NFSe\Document as NFSeDocument;
use Multiverse\Notazz\NFe\Document as NFeDocument;
use Multiverse\Notazz\DSL\Tools\Formatter;
use Multiverse\Notazz\DSL\Exceptions\MethodNotFoundException;

class DocumentBuilder
{
    protected $document;

    protected $documentType;

    public const NFE = 1;

    public const NFSE = 0;

    public function nfe()
    {
        $this->document = new NFeDocument();
        $this->setDocumentType(self::NFE);
        return $this;
    }

    public function nfse()
    {
        $this->document = new NFSeDocument();
        $this->setDocumentType(self::NFSE);
        return $this;
    }

    public function getDocumentType(): int
    {
        return $this->documentType;
    }

    public function setDocumentType(int $documentType): void
    {
        $this->documentType = $documentType;
    }

    public function __call(string $method, array $args)
    {
        $method = ucfirst(Formatter::snakeToCamel($method));

        $method = "setDocument$method";

        if (false === method_exists($this->document, $method)) {
            throw new MethodNotFoundException("Method ($method) not found in class " . get_class($this->document));
        }

        $this->document->$method($args[0]);
        return $this;
    }

    public function getArray()
    {
        return $this->document->toArray();
    }

    public function getInstance()
    {
        return $this->document;
    }
}
