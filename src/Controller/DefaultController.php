<?php

namespace App\Controller;


use App\Entity\State;
use App\Entity\Traobject;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BaseController
{

    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {   $lost= $this->getDoctrine()->getRepository(State::class)->findOneBy(['label'=>State::LOST]);
        $find= $this->getDoctrine()->getRepository(State::class)->findOneBy(['label'=>State::FIND]);
        $traobjectlosts = $this->getDoctrine()->getRepository(Traobject::class)->findByState($lost,4);
        $traobjectfinds = $this->getDoctrine()->getRepository(Traobject::class)->findByState($find,4);
        return $this->render('default/homepage.html.twig',[
            "traobjectlosts"=> $traobjectlosts,
            "traobjectfinds"=> $traobjectfinds,
        ]);    }

}