<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatematicaController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        //return new Response("Ok");

        return $this->render('default/index.html.twig');
    }

    public function operarAction($numero1, $numero2) {
        $operaciones = [
            "suma" =>  $numero1 + $numero2,
            "resta" => $numero1 - $numero2,
            "multiplicacion" => $numero1 * $numero2,
            "division" => $numero1 / $numero2
        ];
        
        return $this->render('matematica/resultados.html.twig', $operaciones);
    }


}
