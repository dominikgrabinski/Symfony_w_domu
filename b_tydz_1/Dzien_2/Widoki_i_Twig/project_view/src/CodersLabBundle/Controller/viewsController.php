<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CodersLabBundle\Entity\Article;

class viewsController extends Controller
{
    // /**
    //  * @Route("/render/{username}")
    //  */
    // public function renderUserName($username){
    //     return $this->render(
    //         'view_ex_b1.html.twig',
    //         ['username'=>$username]
    //     );
    // }
    /**
     * @Route("/render/{username}",name="homepage")
     * @Template("view_ex_b1.html.twig")
     */
    public function renderUserName($username){
        return ['username'=>$username];
    }
    /**
     * @Route("/repeatSentence/{n}")
     * @Template()
     */
    public function repeatSentenceAction($n){
        return ['n'=>$n];
    }
    /**
     * @Route("/createRandoms/{start}/{end}/{n}")
     * @Template()
     */
    public function createRandomsAction(
        $start,$end,$n
    ){
        $myArray = [];
        for($i=0;$i<$n;$i++){
            $myArray[]=rand($start,$end);
        }
        return [
            'randomArray'=>$myArray,
            'start'=>$start,
            'end'=>$end,
            'elementQuantity'=>$n
        ];
    }
    /**
     * @Route("/showArticle/{n}")
     * @Template()
     */
    public function showArticleAction($n){
        $article = Article::GetArticlebyId($n);
        return ['article'=>$article];
    }
    /**
     * @Route("/showAllArticles")
     * @Template()
     */
    public function showAllArticlesAction(){
        $articles = Article::GetAllArticles();
        return ['articles'=>$articles];
    }
}
