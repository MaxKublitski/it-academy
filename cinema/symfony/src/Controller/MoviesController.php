<?php

namespace App\Controller;

use App\Entity\Movies;
use App\Form\MoviesType;
use App\Repository\MoviesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies", name="movies")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $movie = new Movies();
        $form = $this->createForm(MoviesType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $em->persist($movie);
            $em->flush();
        }

        $movies = $em->getRepository(Movies::class)->findAll();

        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MoviesController',
            'form' => $form->createView(),
            'movies' => $movies
        ]);
    }
}
