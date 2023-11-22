<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CalculatorController extends Controller
{
   public function sumaAction ($numero1, $numero2){
      return new Response("Suma: " . $numero1 + $numero2);
   }
   
   public function restaAction ($numero1, $numero2){
      return new Response("Resta: " . $numero1 - $numero2);
   }

   public function multiplicacionAction($numero1, $numero2){
      return new Response("multiplicacion: " . $numero1 * $numero2);
   }

   public function divisionAction($numero1, $numero2){
      return new Response ("Division: " . $numero1 / $numero2);
   }

   public function probarExepcionAction(){
     //throw $this->createNotFoundException("Registro no existe");
     throw new HttpException(299, 'Hubo un error interno en el servidor');
   }

}