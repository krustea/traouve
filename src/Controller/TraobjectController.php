<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TraobjectController extends AbstractController
{
    /**
     * @Route("/traobject", name="traobject")
     */
    public function index()
    {
        return $this->render('traobject/index.html.twig', [
            'controller_name' => 'TraobjectController',
        ]);
    }
}
