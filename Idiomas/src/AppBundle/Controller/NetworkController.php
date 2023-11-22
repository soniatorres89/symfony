<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NetworkController extends Controller
{
    public function signinAction($name = 'anonimo')
    {
        // Verificar si el nombre cumple con los requisitos, pero solo desde el controlador
        // si la restricción está definida en el enrutador nisiquiera entraría en esta acción
        /*if (!preg_match('/^[a-zA-Z]+$/', $name)) {
            throw $this->createNotFoundException('Nombre no válido. Debe contener solo letras mayúsculas o minúsculas.');
        }*/

        // Guardar el nombre en sesión
        $this->get('session')->set('username', $name);

        // Crear un mensaje flash
        $this->addFlash('notice', 'Hola ' . $name);

        // Renderizar la página index.html.twig
        return $this->render('default/index.html.twig', [
            'message' => $this->get('session')->getFlashBag()->get('notice')[0],
        ]);
    }

    public function lenguajeAction(Request $request, $locale = 'es')
    {
        // Verificar si el locale cumple con los requisitos
        if (!in_array($locale, ['es', 'en', 'fr'])) {
            throw $this->createNotFoundException('Locale no válido. Debe ser "es", "en" o "fr".');
        }

        // Guardar el locale en sesión
        $this->get('session')->set('locale', $locale);

        // Renderizar la página correspondiente al idioma
        /*return $this->render('default/saludo' . $locale . '.html.twig', [
            'locale' => $locale,
        ]);*/

        $mensaje = "Buenos días!";

        if($locale == "fr") {
            $mensaje = "Bonjour!";
        } else if($locale == "en") {
            $mensaje = "Good morning!";
        }

        return $this->render('default/saludo.html.twig', [
            'mensaje' => $mensaje,
        ]);

    }

    public function profileAction()
    {
        // Obtener el nombre de usuario de la sesión
        $username = $this->get('session')->get('username');

        // Obtener el locale de la sesión
        $locale = $this->get('session')->get('_locale', 'es');

        // Renderizar la página profile.html.twig con el nombre de usuario y el idioma correctos
        return $this->render('AppBundle:Network:profile.html.twig', [
            'username' => $username,
            'locale' => $locale,
        ]);
    }
}
