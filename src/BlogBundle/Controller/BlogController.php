<?php
/**
 * Created by PhpStorm.
 * User: vitl1
 * Date: 13.02.2017
 * Time: 13:19
 */

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function homepageAction()
    {
        return $this->render("::base.html.twig");
    }

    /**
     * Отображение статьи
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogViewAction($id)
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("BlogBundle:Blog");
        $article = $blogRepository->find($id);

        return $this->render("BlogBundle:blog:view.html.twig",[
            'article' => $article,
        ]);
    }

    public function teaserAction()
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("BlogBundle:Blog");
        $articles = $blogRepository->findAll();

        return $this->render("BlogBundle:blog:teaser.html.twig", [
            'articles' => $articles,
        ]);
    }


}