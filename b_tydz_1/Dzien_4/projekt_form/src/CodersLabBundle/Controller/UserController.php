<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use CodersLabBundle\Entity\User;

class UserController extends Controller
{
    private function getForm(
        $user,
        $actionUrl = false,
        $button_label = 'Create User'
    ){
        if($actionUrl === false){
            $actionUrl = $this->generateUrl('coderslab_user_create');
        }
        $form = $this->createFormBuilder($user)
            ->setAction($actionUrl)
            ->setMethod('POST')
            ->add('nick')
            ->add('tweet')
            ->add('save','submit',array('label' => $button_label))
            ->getForm();
        return $form;
    }
    /**
     * @Route("/newUser")
     */
    public function newAction()
    {
        $newUser = new User();
        $form = $this->getForm($newUser);
        return $this->render('CodersLabBundle:User:new.html.twig', array(
            'newUserForm' => $form->createView()
        ));
    }

    /**
     * @Route("/createUser")
     */
    public function createAction(Request $req)
    {
        $newUser = new User();
        $form = $this->getForm($newUser);
        $form->handleRequest($req);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($newUser);
            $em->flush();
            return $this->redirect($this->generateUrl('coderslab_user_showall'));
        }
        return $this->render('CodersLabBundle:User:new.html.twig', array(
            'newUserForm' => $form->createView()
        ));
    }

    /**
     * @Route("/showAllUser")
     */
    public function showAllAction()
    {
        return $this->render('CodersLabBundle:User:show_all.html.twig', array(
            'users' => $this->getDoctrine()->getRepository('CodersLabBundle:User')->findAll()
        ));
    }

    /**
     * @Route("/searchUser/{namestart}")
     */
    public function searchUserAction($namestart)
    {
        $users =
            $this
                ->getDoctrine()
                    ->getRepository('CodersLabBundle:User')
                        ->findStartingWhit($namestart);
        return $this->render('CodersLabBundle:User:show_all.html.twig', array(
            'users' => $users
        ));
    }

}
