<?php


namespace Target\Components;


use AdServer\ClientLocal\Components\Client;

class Service
{
    protected $contentClient;

    public function __construct(Client $client)
    {
        $this->contentClient = $client;
    }

    public function getTarget()
    {
        return $this->contentClient->request('/')->getContent() . ' from target';
    }
}