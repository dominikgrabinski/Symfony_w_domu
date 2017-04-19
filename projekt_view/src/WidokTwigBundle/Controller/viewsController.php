<?php

namespace WidokTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class viewsController extends Controller
{
     /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('WidokTwigBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/render")
     */
    
    public function renderAction() {
        return $this->render('WidokTwigBundle:Widok:view_ex_a3.html.twig');
    }
    
    /**
     * @Route("/render2")
     * @Template("WidokTwigBundle:Widok:view_ex_a3.html.twig")
     */
    
    public function render2Action() {
        return [];
    }
    
    /**
     * @Route("/render3")
     */
    
    public function render3Action() {
        return $this->render('WidokApp/view_ex_a3.html.twig');
    }
}
