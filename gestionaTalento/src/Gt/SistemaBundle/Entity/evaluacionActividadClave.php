<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * evaluacionActividadClave
 *
 * @ORM\Table(name="evaluacionActividadClave" )
 * @ORM\Entity()
 */
class evaluacionActividadClave
{
  
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="participante_id", type="integer")
     */
    private $participanteId;
        
    /**
     * @var integer
     *
     * @ORM\Column(name="actividadClave_id", type="integer")
     */
    private $actividadClaveId;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionActividadClaveRespuesta", type="integer")
     */
    private $evaluacionActividadClaveRespuesta;

   
    /**
     * @ORM\OneToMany(targetEntity="evaluacionCriterio", mappedBy="evaluacionActividadClaveId", cascade={"persist"})
     */
    private $evaluacionCriterios;
    
    
    public function __construct()
    {
        $this->evaluacionCriterios = new ArrayCollection();
    }
    
    
    
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
     * Set participanteId
     *
     * @param integer $participanteId
     * @return evaluacionActividadClave
     */
    public function setParticipanteId($participanteId)
    {
        $this->participanteId = $participanteId;

        return $this;
    }

    /**
     * Get participanteId
     *
     * @return integer 
     */
    public function getParticipanteId()
    {
        return $this->participanteId;
    }
    
    /**
     * Set actividadClaveId
     *
     * @param integer $actividadClaveId
     * @return evaluacionActividadClave
     */
    public function setActividadClaveId($actividadClaveId)
    {
        $this->actividadClaveId = $actividadClaveId;

        return $this;
    }

    /**
     * Get actividadClaveId
     *
     * @return integer 
     */
    public function getActividadClaveId()
    {
        return $this->actividadClaveId;
    }

    /**
     * Set evaluacionActividadClaveRespuesta
     *
     * @param integer $evaluacionActividadClaveRespuesta
     * @return evaluacionActividadClave
     */
    public function setEvaluacionActividadClaveRespuesta($evaluacionActividadClaveRespuesta)
    {
        $this->evaluacionActividadClaveRespuesta = $evaluacionActividadClaveRespuesta;

        return $this;
    }

    /**
     * Get evaluacionActividadClaveRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionActividadClaveRespuesta()
    {
        return $this->evaluacionActividadClaveRespuesta;
    }

  
    /**
     * Get evaluacionCriterios
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionCriterios()
    {
        return $this->evaluacionCriterios;
    }

    /**
     * Add evaluacionCriterios
     * @param \Gt\SistemaBundle\Entity\evaluacionCriterio $evaluacionCriterio
     * @return participante
     */
    public function addEvaluacionCriterio(\Gt\SistemaBundle\Entity\evaluacionCriterio $evaluacionCriterio) {
        $this->evaluacionCriterios[] = $evaluacionCriterio;
        $evaluacionCriterio->setEvaluacionActividadClave($this);
        return $this;
    }
    
    /**
     * Remove evaluacionCriterios
     * @param \Gt\SistemaBundle\Entity\evaluacionCriterio $evaluacionCriterio
     */
    public function removeEvaluacionCriterio(\Gt\SistemaBundle\Entity\evaluacionCriterio $evaluacionCriterio) {
        $this->evaluacionCriterios->removeElement($evaluacionCriterio);
    }
       
    
    
}
