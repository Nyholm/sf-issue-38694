<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EmailType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="hello")
     */
    public function index(Request $request): Response
    {
        $user = new User();

        $form = $this->createForm(EmailType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return new Response('Valid!');
        }

        return $this->render('base.html.twig', ['form'=>$form->createView()]);
    }
}
