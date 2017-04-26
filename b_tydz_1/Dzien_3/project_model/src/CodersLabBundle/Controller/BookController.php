<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use CodersLabBundle\Entity\Book;

class BookController extends Controller
{
    /**
     * @Route("/newBook")
     * @Template()
     */
    public function newBookAction(){
        $autors = $this->getDoctrine()->
            getRepository("CodersLabBundle:Autor")->findAll();

        return ['autors'=>$autors];
    }
    /**
     * @Route("/createBook",name="createBook")
     * @Template()
     */
    public function createBookAction(Request $req){
        $title  = $req->request->get('title');
        $desc   = $req->request->get('description');
        $rating = $req->request->get('rating');
        $autorId = $req->request->get('autor');

        $autor = $this->getDoctrine()->
            getRepository("CodersLabBundle:Autor")->find($autorId);

        $book = new Book();
        $book->setTitle($title);
        $book->setDescription($desc);
        $book->setRating($rating);

        $book->setAutor($autor);
        $autor->addBook($book);

        $em = $this->getDoctrine()->getManager();

        $em->persist($book);
        $em->flush(); // albo poprostu $em->flush();

        return [
            'title' => $title,
            'desc' => $desc,
            'rating' => $rating
        ];
    }
    /**
     * @Route("/showBook/{id}",name="showBook")
     * @Template()
     */
    public function showBookAction($id){
        // $em = $this->getDoctrine()->getManager();
        // $repo = $em->getRepository('CodersLabBundle:Book');
        $repo =
            $this->
                getDoctrine()->
                    getRepository('CodersLabBundle:Book');
        $book = $repo->find($id);
        return ['book'=>$book];
    }
    /**
     * @Route("/showAllBooks")
     * @Template()
     */
    public function showAllBooksAction(){
        // $em = $this->getDoctrine()->getManager();
        // $repo = $em->getRepository('CodersLabBundle:Book');
        $repo =
            $this->
                getDoctrine()->
                    getRepository('CodersLabBundle:Book');
        $books = $repo->findAll();
        return ['books'=>$books];
    }
    /**
     * @Route("/deleteBook/{id}",name="deleteBook")
     * @Template()
     */
    public function deleteBookAction($id){
        // $em = $this->getDoctrine()->getManager();
        // $repo = $em->getRepository('CodersLabBundle:Book');
        $repo =
            $this->
                getDoctrine()->
                    getRepository('CodersLabBundle:Book');
        $book = $repo->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($book);
        $em->flush();
        return ['book'=>$book];
    }
}
