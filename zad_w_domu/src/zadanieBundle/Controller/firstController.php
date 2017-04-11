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
}
