<?php
/**
 * Created by PhpStorm.
 * User: ALBERTO
 * Date: 18/05/2015
 * Time: 13:46
 */

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Venta
{

    /** @ORM\Column(type="datetime") */
    protected $fecha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cupon\OfertaBundle\Entity\Oferta")
     */
    protected $oferta;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cupon\UsuarioBundle\Entity\Usuario")
     */
    protected $usuario;

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario(\Cupon\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     */
    public function setOferta(\Cupon\OfertaBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }


}