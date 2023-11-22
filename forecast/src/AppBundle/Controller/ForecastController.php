<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception;

class ForecastController extends Controller{
    
    public function indexAction() {
        return new Response("Ok");
    }

    public function meLoInventoAction(Request $request) {
        $weather = $request->query->get("weather");
        return new Response("Este profe no sabe " . $weather);
    }

    // public function indexRequestAction($weather, $temperature, Request $request){
    //     return new Response ('<html><body>In ' 
    //     . $request->query->get("ciudad") . ' is ' . $weather . 
    //     ' and the current temperature is: ' . $temperature .
    //      '</body></html>');
    // }
   
    /*public function indexParam() {
        return new Response("Ok");
    }*/

}
