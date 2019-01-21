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
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PostController extends AbstractController
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $posts = $repository->findAll();

        $params = [
            "toto" => "Salut",
            "posts" => $posts
        ];

        return $this->render("Post/index.html.twig", $params);
    }

    public function addAction()
    {
        $post = new Post();
        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class)
            ->add('content', TextType::class)
            ->add('author', TextType::class)
            ->getForm();

        return $this->render("Post/add.html.twig", ['form' => $form->createView()]);
    }

    public function showAction(Post $post)
    {
        return $this->render("Post/single.html.twig", ['post' => $post]);
    }
}
