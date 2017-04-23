<?php

namespace WidokTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

//se WidokTwigBundle\Entity\Post;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
//        $post = new Post();
//
//        $post->setTitle("My 3 post");
//        $post->setText("My 3 post text");
//        
//        $em = $this->getDoctrine()->getManaget();
//        $em->persist($post);
//        $em->flush();
//                
                
        return $this->render('WidokTwigBundle:Default:index.html.twig');
    }
}
