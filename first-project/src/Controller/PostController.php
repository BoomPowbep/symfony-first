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
use Symfony\Component\HttpFoundation\Response;

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

    public function addAction() {
        $post = new Post();
        $post->setTitle("Les chats mangeurs de pinguins");
        $post->setContent("Y'a des chats qui bouffent des pinguis omg trop bien lol");
        $post->setAuthor("Isaac Newton");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($post);
        $entityManager->flush();

        return new Response("coucoucoucoucouc");
    }
}
