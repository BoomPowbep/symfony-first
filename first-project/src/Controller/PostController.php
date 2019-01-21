<?php
/**
 * Created by PhpStorm.
 * User: mickaeldebalme
 * Date: 2019-01-21
 * Time: 09:59
 */

namespace App\Controller;


use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function indexAction()
    {
        $post = new Post();
        $post->setTitle("Les pinguins d'Alaska");

        $params = [
            "toto" => "Salut",
            "post" => $post
        ];

        return $this->render("Post/index.html.twig", $params);
    }
}
