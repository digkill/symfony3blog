<?php
/**
 * Created by PhpStorm.
 * User: vitl1
 * Date: 17.02.2017
 * Time: 12:00
 */

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render("BlogBundle:page:about.html.twig");
    }

}