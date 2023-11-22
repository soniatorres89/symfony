<?php
// src/AppBundle/Controller/SesionController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SesionController extends Controller
{
    public function loginAction($user, $password)
    {
        // Verifica las condiciones
        if ($user === 'admin' && $password === '1234') {
            // Almacena el usuario en sesión
            $this->get('session')->set('user', $user);
            
            // Hace un forward a la acción correcta
            return $this->forward('AppBundle:Default:correcto', array('mensaje' => 'Login correcto!!!!!'));
        } elseif ($password[0] === strtoupper($password[0])) {
            // Maneja el error con createNotFoundException
            throw $this->createNotFoundException('La contraseña debe empezar por minúscula');
        } else {
            // Hace un redirect a la acción de login incorrecto
            return $this->redirect($this->generateUrl('login_incorrecto'));
        }
    }
}
