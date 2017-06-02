<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    /**
     * @Route("/products")
     */
    public function listAction()
    {
        $logger = $this->container->get('logger');
        $logger->info('Look! I just used a service');

        // ...
    }
}