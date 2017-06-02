<?php

namespace AppBundle\EventListener;

use AppBundle\Event\FilterResponseEvent;

class ResponseListener
{
    public function onCookieInit(FilterResponseEvent $event)
    {
        //some complex logic goes here
        echo('test');
    }
}