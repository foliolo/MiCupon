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

    public function portadaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
            'ciudad' => 11, //ojo con el id ya que mi BBDD (11: Madrid)
            'fecha_publicacion' => new \DateTime('today'),
        ));

        return $this->render(
            'OfertaBundle:Default:portada.html.twig',
            array('oferta' => $oferta)
        );
    }
}
