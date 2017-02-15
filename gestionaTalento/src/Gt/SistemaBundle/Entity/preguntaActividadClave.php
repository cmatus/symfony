<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pregunta
 *
 * @ORM\Table(name="preguntaActividadClave")
 * @ORM\Entity()
 */
class preguntaActividadClave
{
    /**
     * @var integer
     *
     * ORM\Column(name="id", type="integer")
     * ORM\Id
     * ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="pregunta_id", type="integer")
     */
    private $preguntaId;    
    
    /**
     * @var integer
     *
     * ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;
    
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="actividadClave_id", type="integer")
     */
    private $actividadClaveId;
    
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
     * @param string $competenciaId
     * @return pregunta
     */
    public function setCompetenciaId($competenciaId)
    {
        $this->competenciaId = $competenciaId;

        return $this;
    }

    /**
     * Get competenciaId
     *
     * @return string 
     */
    public function getCompetenciaId()
    {
        return $this->competenciaId;
    }

    
    /**
     * Set preguntaId
     *
     * @param string $preguntaId
     * @return pregunta
     */
    public function setPreguntaId($preguntaId)
    {
        $this->preguntaId = $preguntaId;

        return $this;
    }

    /**
     * Get preguntaId
     *
     * @return string 
     */
    public function getPreguntaId()
    {
        return $this->preguntaId;
    }
    
    
    /**
     * Set actividadClaveId
     *
     * @param string $actividadClaveId
     * @return pregunta
     */
    public function setActividadClaveId($actividadClaveId)
    {
        $this->actividadClaveId = $actividadClaveId;

        return $this;
    }

    /**
     * Get actividadClaveId
     *
     * @return string 
     */
    public function getActividadClaveId()
    {
        return $this->actividadClaveId;
    }
    
    
}
