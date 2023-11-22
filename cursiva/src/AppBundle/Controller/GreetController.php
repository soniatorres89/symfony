<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetController extends Controller
{
   function soniaAction(){
      return new Response("ok");
   }

   function yeissonAction(){
      return new Response ("pichurris");

   }

   function pepeAction(){

   }
  
   function cursivaAction($algo){
      return new Response("<i>$algo</i>");
   }
}