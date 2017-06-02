<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use AppBundle\Event\FilterResponseEvent;
use AppBundle\CookieEvents;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max = 2)
    {
        $number = mt_rand(0, $max);

        $response = $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
        $dispatcher = $this->get('event_dispatcher');

        $event = new FilterResponseEvent($response);
        $dispatcher->dispatch(CookieEvents::COOKIE_EVENT, $event);


        return $response;
    }
}
