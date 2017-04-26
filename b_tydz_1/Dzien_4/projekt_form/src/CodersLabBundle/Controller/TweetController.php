<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use CodersLabBundle\Entity\Tweet;

class TweetController extends Controller
{
    /* Metoda generowania formularza dla TweetController */
    private function getTweetForm(
        $tweet,
        $actionUrl = false,
        $button_label = 'Create Tweet'
    ){
        if($actionUrl === false){
            $actionUrl = $this->generateUrl('coderslab_tweet_create');
        }
        $form = $this->createFormBuilder($tweet)
            ->setAction($actionUrl)
            ->setMethod('POST')
            ->add('title')
            ->add('text')
            ->add('save','submit',array('label' => $button_label))
            ->getForm();
        return $form;
    }
    /**
     * Akcja odbierająca dane
     *
     * @Route("/tweetCreate")
     */
    public function createAction(Request $req)
    {
        $tweet = new Tweet();
        $form = $this->getTweetForm($tweet);
        $form->handleRequest($req);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
        }
        return $this->render('CodersLabBundle:Tweet:create.html.twig', array(
            // ...
        ));
    }
    /**
     * Akcja renderująca FORM
     *
     * @Route("/tweetNew")
     */
    public function newAction()
    {
        $tweet = new Tweet();
        $form = $this->getTweetForm($tweet);
        return $this->render('CodersLabBundle:Tweet:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    /**
     * Update encji w jednej akcji
     * @Route("/tweetUpdate/{id}")
     */
    public function updateAction(Request $req, $id){
        $repo = $this->getDoctrine()
            ->getRepository("CodersLabBundle:Tweet");
        $tweet = $repo->find($id);
        $form = $this->getTweetForm(
            $tweet,
            $this->generateUrl(
                'coderslab_tweet_update',
                array('id'=>$id)
            ),
            'Update Tweet'
        );
        $form->handleRequest($req);
        if($form->isSubmitted()){
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->render('CodersLabBundle:Tweet:update.html.twig',array(
            'form'=>$form->createView()
        ));
    }

    /**
     * @Route("/tweetShowAll")
     */
    public function showAllAction()
    {
        $repo = $this->getDoctrine()
            ->getRepository("CodersLabBundle:Tweet");
        $tweets = $repo->findAll();
        return $this->render('CodersLabBundle:Tweet:show_all.html.twig', array(
            'tweets' => $tweets
        ));
    }

}
