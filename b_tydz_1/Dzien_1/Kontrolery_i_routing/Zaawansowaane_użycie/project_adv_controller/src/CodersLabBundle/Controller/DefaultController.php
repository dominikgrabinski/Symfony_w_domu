<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
    public function reciveFormAction(Request $req){
        $output = '';
        $data = $req->request->all();
        foreach($data as $k => $v){
            $output .= $k.': '.$v.'<br/>';
        }
        $resp = new Response('<html><body>Formularz przyjęty<hr/>'.$output.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/setSession/{value}")
     */
    public function setSessionAction(Request $req,$value){
        $req->getSession()->set('usertext',$value);
        $resp = new Response('<html><body>New value: '.$value.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/getSession")
     */
    public function getSessionAction(Request $req){
        $usertext = $req->getSession()->get('usertext','[empty]');
        $resp = new Response('<html><body>usertext: '.$usertext.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/setCookie/{value}")
     */
    public function setCookieAction(Request $req, $value){
        $myCookie = new Cookie('myCookie',$value,time()+3600);
        $resp = new Response('<html><body>setting cookie</body></html>');
        $resp->headers->setCookie($myCookie);
        return $resp;
    }
    /**
     * @Route("/getCookie")
     */
    public function getCookieAction(Request $req){
        $myCookieValue = $req->cookies->get('myCookie','[empty]');
        $resp = new Response('<html><body>myCookie: '.$myCookieValue.'</body></html>');
        return $resp;
    }
    /**
     * @Route("/deleteCookie")
     */
    public function deleteCookieAction(Request $req){
        $myCookie = new Cookie('myCookie', '', 1);
        $resp = new Response('<html><body>removing cookie</body></html>');
        $resp->headers->setCookie($myCookie);
        return $resp;
    }
    /**
     * @Route("/redirectMy")
     */
    public function redirectMyAction(){
        $url = $this->generateUrl(
            'coderslab_default_setcookie',
            [
                'value'=>'redirectValue'
            ]
        );
        return $this->redirect($url);
    }
    /**
     * @Route("/showAllLinks",name="action_for_showing_all_links")
     */
    public function showAllLinksAction(){
        $urls = [];


        $urls[] = $this->generateUrl(
            'coderslab_default_index',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        );


        $urls[] = $this->generateUrl( 'coderslab_default_showform',[],UrlGeneratorInterface::ABSOLUTE_URL );
        $urls[] = $this->generateUrl( 'coderslab_default_setsession',['value'=>'someValue'],UrlGeneratorInterface::ABSOLUTE_URL );
        $output = '';
        foreach ($urls as $url) {
            $output .= '<a href="'.$url.'">'.$url.'</a> <br/>';
        }
        $resp = new Response('<html><body>All links:<br/>'.$output.'</body></html>');
        return $resp;
    }
}
