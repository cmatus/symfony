<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * perfil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\perfilRepository")
 */
class perfil
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
     * @ORM\Column(name="perfilCodigo", type="string", length=10)
     */
    private $perfilCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="perfilNombre", type="string", length=50)
     */
    private $perfilNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="perfilReporta", type="string", length=255)
     */
    private $perfilReporta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="perfilObjetivo", type="text")
     */
    private $perfilObjetivo;

    /**
     * @var string
     *
     * @ORM\Column(name="perfilTareas", type="text")
     */
    private $perfilTareas;

    
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
     *
     * @param integer $empresaId
     * @return competencia
     */
    public function setEmpresaId($empresaId)
    {
        $this->empresaId = $empresaId;

        return $this;
    }

    /**
     * Get empresaId
     *
     * @return integer
     */
    public function getEmpresaId()
    {
        return $this->empresaId;
    }
    
    
    /**
     * Set perfilCodigo
     *
     * @param string $perfilCodigo
     * @return perfil
     */
    public function setPerfilCodigo($perfilCodigo)
    {
        $this->perfilCodigo = $perfilCodigo;

        return $this;
    }

    /**
     * Get perfilCodigo
     *
     * @return string 
     */
    public function getPerfilCodigo()
    {
        return $this->perfilCodigo;
    }
    
    /**
     * Set perfilNombre
     *
     * @param string $perfilNombre
     * @return perfil
     */
    public function setPerfilNombre($perfilNombre)
    {
        $this->perfilNombre = $perfilNombre;

        return $this;
    }

    /**
     * Get perfilNombre
     *
     * @return string 
     */
    public function getPerfilNombre()
    {
        return $this->perfilNombre;
    }

    /**
     * Set perfilObjetivo
     *
     * @param string $perfilObjetivo
     * @return perfil
     */
    public function setPerfilObjetivo($perfilObjetivo)
    {
        $this->perfilObjetivo = $perfilObjetivo;

        return $this;
    }

    /**
     * Get perfilObjetivo
     *
     * @return string 
     */
    public function getPerfilObjetivo()
    {
        return $this->perfilObjetivo;
    }
    
    /**
     * Set perfilTareas
     *
     * @param string $perfilTareas
     * @return perfil
     */
    public function setPerfilTareas($perfilTareas)
    {
        $this->perfilTareas = $perfilTareas;

        return $this;
    }

    /**
     * Get perfilTareas
     *
     * @return string 
     */
    public function getPerfilTareas()
    {
        return $this->perfilTareas;
    }

    /**
     * Set perfilReporta
     *
     * @param string $perfilReporta
     * @return perfil
     */
    public function setPerfilReporta($perfilReporta)
    {
        $this->perfilReporta = $perfilReporta;

        return $this;
    }

    /**
     * Get perfilReporta
     *
     * @return string 
     */
    public function getPerfilReporta()
    {
        return $this->perfilReporta;
    }
    
}
