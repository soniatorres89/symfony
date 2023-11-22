<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExcepcionesController extends Controller
{
  public function erroresAction($id){
    if ($id == null || $id != 1){
        throw $this->createNotFoundException ("El registro requerido no existe");
    }else{
        return new Response("Registro: " . $id);
    }
    
  } 
    
}