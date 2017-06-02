<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 02.06.2017
 * Time: 09:22
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     ** @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function listAction($page = 1)
    {
        $messageGenerator = $this->container->get('app.message_generator');
        $message = $messageGenerator->getHappyMessage();
        $response = new Response($page . '  ' . $message);
        return $response;
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        $url = $this->generateUrl('blog_show', array('slug' => 'my-blog-post'), UrlGeneratorInterface::ABSOLUTE_URL);


        $response = new Response($url);
        return $response;

    }
}