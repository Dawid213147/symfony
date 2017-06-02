<?php

namespace AppBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

class FilterResponseEvent extends Event
{
    protected $response;
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
    public function getResponse()
    {
        return $this->response;
    }
}