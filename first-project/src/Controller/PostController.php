<?php
/**
 * Created by PhpStorm.
 * User: mickaeldebalme
 * Date: 2019-01-21
 * Time: 09:59
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function indexAction()
    {
        return $this->render("Post/index.html.twig");
    }
}
