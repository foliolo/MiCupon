<?php
// src/Cupon/CiudadBundle/Entity/Ciudad.php
/**
 * Created by PhpStorm.
 * User: ALBERTO
 * Date: 18/05/2015
 * Time: 12:10
 */

namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Ciudad
 * @package Cupon\CiudadBundle\Entity
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;
    /** @ORM\Column(type="string", length=100) */
    protected $slug;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}