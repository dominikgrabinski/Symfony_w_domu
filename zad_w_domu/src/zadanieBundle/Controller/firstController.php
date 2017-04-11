<?php

namespace zadanieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class firstController extends Controller
{
    /**
     * @Route("/helloWorld")
     */
    public function helloWorldAction() {
        $response = new Response ('<html><body>Witaj świecie !!</body></html>');
        return $response;
    }
    
    /**
     * @Route("/goodbye/{username}")
     */
    
    public function goodbyeUserAction($username) {
        $response = new Response('<html><body>Goodbye '.$username.' <body></html>');
        return $response;
    }
    
    /**
     * @Route("/welcome/{name}/{surname}", defaults = {"name" = "Andrzej", "surname" = "Gołota"})
     */
    
    public function welcomeUserAction($name, $surname) {
        $response = new Response('<html><body>Witaj! '.$name. ' '.$surname.'</body></html>');
        return $response;
    }
}
