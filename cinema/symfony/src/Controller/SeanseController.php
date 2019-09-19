<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeanseController extends AbstractController
{
    /**
     * @Route("/seanse", name="seanse")
     */
    public function index()
    {
        return $this->render('seanse/index.html.twig', [
            'controller_name' => 'SeanseController',
        ]);
    }
}
