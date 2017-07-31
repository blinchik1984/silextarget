<?php

namespace Target\Controllers;

use AdServer\Engine\Components\Engine;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomePage
{
    protected $di;

    public function __construct()
    {
    }

    public function index()
    {
        return  new Response('request from target service:' . Engine::getDI()->get('targetService')->getTarget());
    }

    public function hello()
    {
        return new Response();
    }
}