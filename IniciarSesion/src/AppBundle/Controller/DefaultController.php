<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    public function correctoAction($mensaje)
    {
       return new Response($mensaje);
    }

    public function loginIncorrectoAction()
    {
       return new Response("Login incorrecto!");
    }

}
