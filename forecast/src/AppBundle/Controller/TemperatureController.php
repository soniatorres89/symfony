<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TemperatureController extends Controller
{
    public function getAction($id){
        if ($id == null || $id != 1){
            throw $this->createNotFoundException("the register requested does nots exist");
        } else {
            return new Response("Register " . $id );
        }
    }
    public function checkAction(Request $request){
        $session=$request->getSession();
        $log = $session->get('log', array());

        array_push($log,'temperatura chequeada en ' . date('l jS \of F Y h:i:s A'));
        $session->set('log', $log);

        return new Response('temperatura chekada y log tomado');

    }

    public function getAllAction(Request $request){

    
        $session=$request->getSession();
        $log = $session->get('log', array());
        $result = '';

        foreach ($log as $item){
                $result.= $item . '<br>';
        
        }
        return new Response($result);
    }
        

}


?>
