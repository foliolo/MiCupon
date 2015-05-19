<?php
/**
 * Created by PhpStorm.
 * User: ALBERTO
 * Date: 18/05/2015
 * Time: 15:57
 */

namespace Cupon\OfertaBundle\DataFixtures\ORM;

use Cupon\OfertaBundle\Entity\Oferta;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Ofertas implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 400; $i++) {
            $entidad = new Oferta();

            $entidad->setNombre('Oferta ' . $i);
            $entidad->setPrecio(rand(1, 100));
            $entidad->setFechaPublicacion(new \DateTime());
            $entidad->setCompras(0);
            $entidad->setUmbral(0);
            $entidad->setRevisada(false);
            $entidad->setDescripcion("Oferta" . $i);
            $entidad->setCondiciones("Ninguna");
            $entidad->setRutaFoto("");
            $entidad->setDescuento(10);
            $entidad->setFechaExpiracion(new \DateTime('tomorrow'));


            $manager->persist($entidad);
        }
        $manager->flush();
    }
}