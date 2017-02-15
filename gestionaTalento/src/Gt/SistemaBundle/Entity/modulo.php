<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * modulo
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity()
 */
class modulo {
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
     * @ORM\Column(name="moduloCodigo", type="string", length=10)
     */
    private $moduloCodigo;
        
    /**
     * @var string
     *
     * @ORM\Column(name="moduloNombre", type="string", length=255)
     */
    private $moduloNombre;

    /**
     * @var text
     *
     * @ORM\Column(name="moduloObjetivo", type="text")
     */
    private $moduloObjetivo;
    
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
     * @return modulo
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
     * Set moduloCodigo
     *
     * @param string $moduloCodigo
     * @return modulo
     */
    public function setModuloCodigo($moduloCodigo)
    {
        $this->moduloCodigo = $moduloCodigo;

        return $this;
    }

    /**
     * Get moduloCodigo
     *
     * @return string 
     */
    public function getModuloCodigo()
    {
        return $this->moduloCodigo;
    }
    
    /**
     * Set moduloNombre
     *
     * @param string $moduloNombre
     * @return modulo
     */
    public function setModuloNombre($moduloNombre)
    {
        $this->moduloNombre = $moduloNombre;

        return $this;
    }

    /**
     * Get moduloNombre
     *
     * @return string 
     */
    public function getModuloNombre()
    {
        return $this->moduloNombre;
    }

    /**
     * Set moduloObjetivo
     *
     * @param string $moduloObjetivo
     * @return modulo
     */
    public function setModuloObjetivo($moduloObjetivo)
    {
        $this->moduloObjetivo = $moduloObjetivo;

        return $this;
    }

    /**
     * Get moduloObjetivo
     *
     * @return string 
     */
    public function getModuloObjetivo()
    {
        return $this->moduloObjetivo;
    }
}
