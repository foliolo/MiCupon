<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function ayudaAction()
    {
//        return new Response('Ayuda');
        return $this->render('OfertaBundle:Default:ayuda.html.twig');
    }
}
