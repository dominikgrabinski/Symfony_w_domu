<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class firstController extends Controller
{
    /**
     * @Route("/helloWorld")
     */
    public function helloWorldAction(){
        return new Response('helloWorld!');
    }
}
