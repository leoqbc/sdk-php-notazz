<?php namespace Multiverse\Notazz;

use Multiverse\Notazz\NFSe\Document;
use Multiverse\Notazz\NFSe\Service;
use Multiverse\Notazz\Destination;

class NFSe
{
    /**
     * @var Document
     */
    protected $document;
    /**
     * @var Service
     */
    protected $service;
    /**
     * @var Destination
     */
    protected $destination;

    /**
     * @param Destination
     * @param Document
     * @param Service
     */
    public function __construct(
        Destination $destination,
        Document $document,
        Service $service = null
    )
    {
        $this->destination = $destination;
        $this->document = $document;
        $this->service = $service;
    }

    /**
     * Monta a estruta da NFS-e
     * 
     * @return array
     */
    public function mount() : array
    {
        if ($this->service === null) {
            return array_merge(
                $this->document->toArray(),
                $this->destination->toArray()
            );
        }

        return array_merge(
            $this->document->toArray(),
            $this->service->toArray(),
            $this->destination->toArray()
        );
    }
}