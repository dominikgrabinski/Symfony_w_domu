<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
/**
 * @Route("/first")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CodersLabBundle:Default:index.html.twig');
    }
    /**
     * @Route("/goodbye/{username}")
     */
    public function goodbyeAction($username)
    {
        return new Response('<html><body>Goodbye '.$username.'</body></html>');
    }
    /**
     * @Route("/welcome/{name}/{surname}", defaults={"name":"Bartosz", "surname":"Celmer" })
     */
    public function welcomeAction($name,$surname){
        $data = $name.' '.$surname;
        $resp = new Response('<html><body>Welcome '.$data.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/showPost/{id}", requirements={"id"="\d+"} )
     */
    public function showPostAction($id){
        $resp = new Response('<html><body>Showing post: '.$id.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/form")
     * @Method("GET")
     */
    public function showFormAction(){
        return $this->render('CodersLabBundle:Default:form.html.twig');
    }
    /**
     * @Route("/form")
     * @Method("POST")
     */
    public function reciveFormAction(){
        $resp = new Response('<html><body>Formularz przyjęty</body></html>');
        return $resp;
    }
}
