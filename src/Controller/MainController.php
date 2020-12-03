<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/database", name="database")
     */
    public function database(): Response
    {
        return $this->render('database/index.html.twig', [
            'controller_name' => 'DatabaseController',
        ]);
    }

    /**
     * @Route("/info", name="info")
     */
    public function info(): Response
    {
        return $this->render('info/index.html.twig', [
            'controller_name' => 'InfoController',
        ]);
    }


    // /**
    //  * @Route("/teste/{name}", name="teste")
    //  * @param Request $request
    //  */
    // public function teste(Request $request): Response
    // {
    //     $name = $request->attributes->get("name");
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'TesteController',
    //         'name' => $name,
    //     ]);
    // }

}
