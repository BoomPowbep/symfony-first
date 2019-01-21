<?php
/**
 * Created by PhpStorm.
 * User: mickaeldebalme
 * Date: 2019-01-21
 * Time: 09:59
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PostController extends AbstractController
{
    public function indexAction()
    {
        return new Response("Hello");
    }
}
