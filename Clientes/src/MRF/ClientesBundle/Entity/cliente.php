<?php

namespace MRF\ClientesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MRF\ClientesBundle\Entity\clienteRepository")
 */
class cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=12)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_p", type="string", length=50)
     */
    private $apellidoP;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_m", type="string", length=50)
     */
    private $apellidoM;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=60)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="fono", type="integer")
     */
    private $fono;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return cliente
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidoP
     *
     * @param string $apellidoP
     * @return cliente
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    /**
     * Get apellidoP
     *
     * @return string 
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * Set apellidoM
     *
     * @param string $apellidoM
     * @return cliente
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;

        return $this;
    }

    /**
     * Get apellidoM
     *
     * @return string 
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fono
     *
     * @param integer $fono
     * @return cliente
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return integer 
     */
    public function getFono()
    {
        return $this->fono;
    }
}
