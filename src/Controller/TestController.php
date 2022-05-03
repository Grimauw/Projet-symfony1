<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function index(): Response
    {
        $age = 27;
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'nom_famille' => 'Guillou',
            'mon_age' => $age

            
        ]);
    }
    /**
     * @Route("/route-param/{nom}-{prenom}", name="route_param")
     */
    public function routeParam(String $nom, string $prenom): Response
    {
        return $this->render('test/route-param.html.twig', [
            "nom"=>$nom,
            "prenom"=>$prenom

        ]);
    }
}
