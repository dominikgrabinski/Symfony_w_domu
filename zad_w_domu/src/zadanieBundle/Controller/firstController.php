<?php

namespace zadanieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
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
    
    /**
     * @Route("/setCookie/{value}")
     */
    
    public function setCookieAction(Request $req, $value) {
        $cookie = new Cookie("myCookie", $value, time() + (3600*24));
        $resp = new Response('<html><body>Ustawienie ciasteczka (całe ciastko) :'.$cookie.'</body></html>');
        $resp->headers->setCookie($cookie);
        return $resp;
    }
    
    /**
     * @Route("/getCookie")
     */
    
    public function getCookieAction(Request $request) {
        $cookies = $request->cookies->get("myCookie", '[empty]');
       // $cookieValue = $cookies["myCookie"];
        $resp = new Response('<html><body>Wartość ciasteczka to: '.$cookies.'</body></html>');
        return $resp;
        
        
    }
    
    /**
     * @Route("/deleteCookie")
     */
    
    public function deleteCookieAction(Request $request) {
        
        $resp = new Response('<html><body>Usunięcie cisteczka</body></html>');
        $resp->headers->clearCookie("myCookie");
        
        return $resp;
   
    }
    
    /**
     * @Route("/redirectMe")
     */

    public function redirectMeAction() {
       // $response = $this->redirect($url);
       $url = $this->generateUrl('zadanie_first_deletecookie');
       return $this->redirect($url);
      //  return $this->redirect('http://127.0.0.1:8000/deleteCookie'); <- to dizała
    }

/*
 *   zadanie_first_helloworld     ANY      ANY      ANY    /helloWorld                        
  zadanie_first_goodbyeuser    ANY      ANY      ANY    /goodbye/{username}                
  zadanie_first_welcomeuser    ANY      ANY      ANY    /welcome/{name}/{surname}          
  zadanie_first_showingpost    ANY      ANY      ANY    /showPost/{id}                     
  zadanie_first_formget        GET      ANY      ANY    /form                              
  zadanie_first_formpost       POST     ANY      ANY    /form                              
  zadanie_first_setsession     ANY      ANY      ANY    /setSession/{value}                
  zadanie_first_getsession     ANY      ANY      ANY    /getSession                        
  zadanie_first_setcookie      ANY      ANY      ANY    /setCookie/{value}                 
  zadanie_first_getcookie      ANY      ANY      ANY    /getCookie                         
  zadanie_first_deletecookie   ANY      ANY      ANY    /deleteCookie                      
  zadanie_first_redirectme     ANY      ANY      ANY    /redirectMe
 */
    
    /**
     * @Route ("/showAllLinks")
     */

    public function showAllLinksAction() {
        $urlsArray = [];
        $urlsArray[] = $this->generateUrl('zadanie_first_helloworld');
        $urlsArray[] = $this->generateUrl('zadanie_first_goodbyeuser', ['username' => 'Dominik']);
        $urlsArray[] = $this->generateUrl('zadanie_first_welcomeuser', ['name' => 'Domin', 'surname' => 'Grab'], UrlGeneratorInterface::ABSOLUTE_URL);
        //var_dump($urlsArray);
        $link = '';
        foreach ($urlsArray as $url){
            $link = '<a href="'.$url.'">'.$url.'</a><br>';
        }
        
        return $resp = new Response('<html><body>Lista linków: '.$link.' </body></html>');
   
    }
    
    /**
     * @Route("/show2")
     */
    
    
    
    public function show2Action () {
        $url1 = $this->generateUrl('zadanie_first_helloworld', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $url2 = $this->generateUrl('zadanie_first_goodbyeuser', ['username' => 'Dominik'], UrlGeneratorInterface::ABSOLUTE_URL);
        $url3 = $this->generateUrl('zadanie_first_welcomeuser', ['name' => 'Domin', 'surname' => 'Grab'], UrlGeneratorInterface::ABSOLUTE_URL);
        
     return $resp = new Response('<html><body>Lista linków: <br>
             <a href = "'.$url1.'">'.$url1.'</a><br>
             <a href = "'.$url2.'">'.$url2.'</a><br>
             <a href = "'.$url3.'">'.$url3.'</a><br>    
             </body></html>');
    }
}





