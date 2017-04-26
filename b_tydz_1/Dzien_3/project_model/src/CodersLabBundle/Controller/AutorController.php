<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use CodersLabBundle\Entity\Autor;

class AutorController extends Controller
{
    /**
     * @Route("autorCreate")
     */
    public function createAction(Request $req)
    {
        $name = $req->request->get('name');
        $desc = $req->request->get('description');

        $autor = new Autor();
        $autor->setName($name);
        $autor->setDescription($desc);

        $em = $this->getDoctrine()->getManager();
        $em->persist($autor);
        $em->flush();

        return $this->render('CodersLabBundle:Autor:create.html.twig', array(
            'name'=>$name,
            'desc'=>$desc
        ));
    }

    /**
     * @Route("autorNew")
     */
    public function newAction()
    {
        return $this->render('CodersLabBundle:Autor:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("showAutor/{id}")
     */
    public function showAction($id)
    {
        $autor =
            $this->
                getDoctrine()->
                    getRepository("CodersLabBundle:Autor")->
                        find($id);
        return $this->render('CodersLabBundle:Autor:show.html.twig', array(
            'autor'=>$autor
        ));
    }

    /**
     * @Route("showAllAutor")
     */
    public function showAllAction()
    {
        $autors =
            $this->
                getDoctrine()->
                    getRepository("CodersLabBundle:Autor")->
                        findAll();
        return $this->render('CodersLabBundle:Autor:show_all.html.twig', array(
            'autors'=>$autors
        ));
    }

}
