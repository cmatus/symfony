<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * actividadClave
 *
 * @ORM\Table(name="actividadClave")
 * @ORM\Entity()
 */
class actividadClave {
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
     *
     * @ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="actividadClaveCodigo", type="string", length=10)
     */
    private $actividadClaveCodigo;
        
    /**
     * @var string
     *
     * @ORM\Column(name="actividadClaveNombre", type="string", length=255)
     */
    private $actividadClaveNombre;

    /**
     * @var text
     *
     * @ORM\Column(name="actividadClaveDefinicion", type="text")
     */
    private $actividadClaveDefinicion;
    
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
     * Set competenciaId
     *
     * @param integer $competenciaId
     * @return actividadClave
     */
    public function setCompetenciaId($competenciaId)
    {
        $this->competenciaId = $competenciaId;

        return $this;
    }

    /**
     * Get competenciaId
     *
     * @return integer 
     */
    public function getCompetenciaId()
    {
        return $this->competenciaId;
    }
    
    
    /**
     * Set actividadClaveCodigo
     *
     * @param string $actividadClaveCodigo
     * @return actividadClave
     */
    public function setActividadClaveCodigo($actividadClaveCodigo)
    {
        $this->actividadClaveCodigo = $actividadClaveCodigo;

        return $this;
    }

    /**
     * Get actividadClaveCodigo
     *
     * @return string 
     */
    public function getActividadClaveCodigo()
    {
        return $this->actividadClaveCodigo;
    }
    
    /**
     * Set actividadClaveNombre
     *
     * @param string $actividadClaveNombre
     * @return actividadClave
     */
    public function setActividadClaveNombre($actividadClaveNombre)
    {
        $this->actividadClaveNombre = $actividadClaveNombre;

        return $this;
    }

    /**
     * Get actividadClaveNombre
     *
     * @return string 
     */
    public function getActividadClaveNombre()
    {
        return $this->actividadClaveNombre;
    }

    /**
     * Set actividadClaveDefinicion
     *
     * @param string $actividadClaveDefinicion
     * @return actividadClave
     */
    public function setActividadClaveDefinicion($actividadClaveDefinicion)
    {
        $this->actividadClaveDefinicion = $actividadClaveDefinicion;

        return $this;
    }

    /**
     * Get actividadClaveDefinicion
     *
     * @return string 
     */
    public function getActividadClaveDefinicion()
    {
        return $this->actividadClaveDefinicion;
    }
}
