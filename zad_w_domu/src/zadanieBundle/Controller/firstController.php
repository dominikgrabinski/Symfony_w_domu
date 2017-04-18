<?php

namespace zadanieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//
///**
// * @Route("/first")
// */

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
    
    /**
     * @Route("/showPost/{id}", requirements = {"id" = "\d+"})
     */
    
    public function showingPostAction($id) {
        $response = new Response('<html><body>Showing post '.$id.'</body></html>');
        return $response;
    }
    
    /**
     * @Route("/form")
     * @Method("GET")
     */
    
    public function formGetAction() {
        return $this->render('zadanieBundle:first:form.html.twig');
    }
    
    /**
     * @Route("/form")
     * @Method("POST")
     */

    public function formPostAction(Request $request) {
        $value = $request->request->get("text_field");

        $response = new Response('<html><body>Tekst z formularza: '.$value.'</body></html>');
        return $response;
    }
    
    /**
     * @Route("/setSession/{value}")
     */
    
    public function setSessionAction(Request $request, $value) {
        $request->getSession()->set("usertext", $value);
        $resp = new Response('<html><body>'.$value.'</body></html>');
        return $resp; 
    }
    
    /**
     * @Route("/getSession")
     */
    
    public function getSessionAction(Request $request){
        $getSes = $request->getSession()->get("usertext");
        $response = new Response('<html><body>Dane z sesji:' .$getSes.'</body></html>');
        return $response;
        
    }
    
}

