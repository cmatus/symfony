<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * aprendizaje
 *
 * @ORM\Table(name="aprendizaje")
 * @ORM\Entity()
 */
class aprendizaje {
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
     * @ORM\Column(name="conocimiento_id", type="integer")
     */
    private $conocimientoId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="aprendizajeCodigo", type="string", length=10)
     */
    private $aprendizajeCodigo;
        
    /**
     * @var string
     *
     * @ORM\Column(name="aprendizajeNombre", type="string", length=255)
     */
    private $aprendizajeNombre;

    /**
     * @var text
     *
     * @ORM\Column(name="aprendizajeDefinicion", type="text")
     */
    private $aprendizajeDefinicion;
    
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
     * Set conocimientoId
     *
     * @param integer $conocimientoId
     * @return aprendizaje
     */
    public function setConocimientoId($conocimientoId)
    {
        $this->conocimientoId = $conocimientoId;

        return $this;
    }

    /**
     * Get conocimientoId
     *
     * @return integer 
     */
    public function getConocimientoId()
    {
        return $this->conocimientoId;
    }
    
    
    /**
     * Set aprendizajeCodigo
     *
     * @param string $aprendizajeCodigo
     * @return aprendizaje
     */
    public function setAprendizajeCodigo($aprendizajeCodigo)
    {
        $this->aprendizajeCodigo = $aprendizajeCodigo;

        return $this;
    }

    /**
     * Get aprendizajeCodigo
     *
     * @return string 
     */
    public function getAprendizajeCodigo()
    {
        return $this->aprendizajeCodigo;
    }
    
    /**
     * Set aprendizajeNombre
     *
     * @param string $aprendizajeNombre
     * @return aprendizaje
     */
    public function setAprendizajeNombre($aprendizajeNombre)
    {
        $this->aprendizajeNombre = $aprendizajeNombre;

        return $this;
    }

    /**
     * Get aprendizajeNombre
     *
     * @return string 
     */
    public function getAprendizajeNombre()
    {
        return $this->aprendizajeNombre;
    }

    /**
     * Set aprendizajeDefinicion
     *
     * @param string $aprendizajeDefinicion
     * @return aprendizaje
     */
    public function setAprendizajeDefinicion($aprendizajeDefinicion)
    {
        $this->aprendizajeDefinicion = $aprendizajeDefinicion;

        return $this;
    }

    /**
     * Get aprendizajeDefinicion
     *
     * @return string 
     */
    public function getAprendizajeDefinicion()
    {
        return $this->aprendizajeDefinicion;
    }
}
