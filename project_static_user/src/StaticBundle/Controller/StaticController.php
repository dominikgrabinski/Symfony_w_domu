<?php

namespace StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StaticController extends Controller
{
    /**
     * @Route("/all")
     */
    public function allAction()
    {
        return $this->render('StaticBundle:Static:all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/restricted")
     */
    public function restrictedAction()
    {
        return $this->render('StaticBundle:Static:restricted.html.twig', array(
            // ...
        ));
    }

}
