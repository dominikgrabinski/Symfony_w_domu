<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CodersLabBundle\Entity\Tweet;
use Symfony\Component\HttpFoundation\Request;

class TweetController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $req)
    {
                $url = $this->generateUrl('coderslab_tweet_create');
        $tweet = new Tweet();
        $form = $this->createFormBuilder($tweet)
                ->setAction($url)
                ->add('nazwa', 'text')
                ->add('tekst', 'text')
                ->add('save', 'submit', ['label'=>'Utwórz'])
                ->getForm();
        
        $form->handleRequest($req);
        
    if ($form->isSubmitted()) {
        $post = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);

        $em->flush();
        
        return $this->render('CodersLabBundle:Tweet:create.html.twig', array(
            // ...
        ));
    }
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        $url = $this->generateUrl('coderslab_tweet_create');
        $tweet = new Tweet();
        $form = $this->createFormBuilder($tweet)
                ->setAction($url)
                ->add('nazwa', 'text')
                ->add('tekst', 'text')
                ->add('save', 'submit', ['label'=>'Utwórz'])
                ->getForm();
        
        
        return $this->render('CodersLabBundle:Tweet:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');
        $post = $repo->findAll();
        return $this->render('CodersLabBundle:Tweet:show_all.html.twig', array(
            'wszystkie' => $post
        ));
    }

}
