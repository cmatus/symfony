<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\empresaRepository")
 */
class empresa
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
     * @var integer
     * @ORM\Column(name="empresa_id", type="integer")
     */
    private $empresaId;
        
    /**
     * @var string
     *
     * @ORM\Column(name="empresaRut", type="string", length=10)
     */
    private $empresaRut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="empresaRazonSocial", type="string", length=50)
     */
    private $empresaRazonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="empresaDireccion", type="string", length=255)
     */
    private $empresaDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="empresaGiro", type="string", length=255)
     */
    private $empresaGiro;

    /**
     * @var string
     *
     * @ORM\Column(name="empresaContactoNombre", type="string", length=255)
     */
    private $empresaContactoNombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="empresaContactoCorreo", type="string", length=255)
     */
    private $empresaContactoCorreo;
    
    
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
     * Set empresaId
     * @param integer $empresaId
     * @return Dte
     */
    public function setEmpresaId($empresaId) {
        $this->empresaId = $empresaId;
        return $this;
    }

    /**
     * Get empresaId
     * @return integer 
     */
    public function getEmpresaId() {
        return $this->empresaId;
    }
                
    /**
     * Set empresaRut
     *
     * @param string $empresaRut
     * @return empresa
     */
    public function setEmpresaRut($empresaRut)
    {
        $this->empresaRut = $empresaRut;

        return $this;
    }

    /**
     * Get empresaRut
     *
     * @return string 
     */
    public function getEmpresaRut()
    {
        return $this->empresaRut;
    }
    
    /**
     * Set empresaRazonSocial
     *
     * @param string $empresaRazonSocial
     * @return empresa
     */
    public function setEmpresaRazonSocial($empresaRazonSocial)
    {
        $this->empresaRazonSocial = $empresaRazonSocial;

        return $this;
    }

    /**
     * Get empresaRazonSocial
     *
     * @return string 
     */
    public function getEmpresaRazonSocial()
    {
        return $this->empresaRazonSocial;
    }

    /**
     * Set empresaDireccion
     *
     * @param string $empresaDireccion
     * @return empresa
     */
    public function setEmpresaDireccion($empresaDireccion)
    {
        $this->empresaDireccion = $empresaDireccion;

        return $this;
    }

    /**
     * Get empresaDireccion
     *
     * @return string 
     */
    public function getEmpresaDireccion()
    {
        return $this->empresaDireccion;
    }

    
    /**
     * Set empresaGiro
     *
     * @param string $empresaGiro
     * @return empresa
     */
    public function setEmpresaGiro($empresaGiro)
    {
        $this->empresaGiro = $empresaGiro;

        return $this;
    }

    /**
     * Get empresaGiro
     *
     * @return string 
     */
    public function getEmpresaGiro()
    {
        return $this->empresaGiro;
    }
    
    /**
     * Set empresaContactoNombre
     *
     * @param string $empresaContactoNombre
     * @return empresa
     */
    public function setEmpresaContactoNombre($empresaContactoNombre)
    {
        $this->empresaContactoNombre = $empresaContactoNombre;

        return $this;
    }

    /**
     * Get empresaContactoNombre
     *
     * @return string 
     */
    public function getEmpresaContactoNombre()
    {
        return $this->empresaContactoNombre;
    }

    /**
     * Set empresaContactoCorreo
     *
     * @param string $empresaContactoCorreo
     * @return empresa
     */
    public function setEmpresaContactoCorreo($empresaContactoCorreo)
    {
        $this->empresaContactoCorreo = $empresaContactoCorreo;

        return $this;
    }

    /**
     * Get empresaContactoCorreo
     *
     * @return string 
     */
    public function getEmpresaContactoCorreo()
    {
        return $this->empresaContactoCorreo;
    }

    
    
    
}
