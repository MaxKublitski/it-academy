<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main", methods={"GET", "POST"})
     *
     */
    public function index(Request $request): Response
    {
//        $user = $this->getDoctrine();
        return $this->render('main/index.html.twig', [
//            'user' => $user,
        ]);
    }
}
