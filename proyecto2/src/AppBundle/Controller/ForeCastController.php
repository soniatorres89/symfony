<?php

namespace AppBundle\Controller;

use sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception;

class ForecastController extends Controller{
        public function indexAction()
        {
            return new Response ('hace frio');
}
}

