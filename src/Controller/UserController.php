<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Form\UserType;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(Security $security,UserInterface $user):Response
    {
        $id = $user->getId();
        $posts = $this->getDoctrine()->getRepository(Post::class)->findBy(array('user' => $id), ['id' => 'DESC']);
        return $this->render('user/index.html.twig', [
            'id' => $id,
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/update", name="update")
     */

    public  function update(Request $request, Security  $security, UserInterface  $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        return $this->render('user/update.html.twig', [
            'updateUserForm' => $form->createView(),
        ]);
    }
}