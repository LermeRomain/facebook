<?php

namespace App\Controller;

use App\Form\AjoutPostFormType;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/post/new", name="ajout_post")
     */
    public function ajoutPost(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(AjoutPostFormType::class, $post);
        return $this->render('post/index.html.twig',['postForm'=>$form->createView()]);
    }
}
