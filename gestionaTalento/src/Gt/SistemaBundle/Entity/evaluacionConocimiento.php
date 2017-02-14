<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionConocimiento
 *
 * @ORM\Table(name="evaluacionConocimiento")
 * @ORM\Entity()
 */
class evaluacionConocimiento
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
     * @ORM\Column(name="conocimiento_id", type="integer")
     */
    private $conocimientoId;
        
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionConocimientoRespuesta", type="integer")
     */
    private $evaluacionConocimientoRespuesta;

    /**
     * @ORM\OneToMany(targetEntity="evaluacionAprendizaje", mappedBy="evaluacionConocimientoId", cascade={"persist"})
     */
    private $evaluacionAprendizajes;
    
    
    public function __construct()
    {
        $this->evaluacionAprendizajes = new ArrayCollection();
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
     * Set empresaId
     *
     * @param integer $empresaId
     * @return evaluacionConocimiento
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
     * Set participanteId
     *
     * @param integer $participanteId
     * @return evaluacionConocimiento
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
     * Set conocimientoId
     *
     * @param integer $conocimientoId
     * @return evaluacionConocimiento
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
     * Set evaluacionConocimientoRespuesta
     *
     * @param integer $evaluacionConocimientoRespuesta
     * @return evaluacionConocimiento
     */
    public function setEvaluacionConocimientoRespuesta($evaluacionConocimientoRespuesta)
    {
        $this->evaluacionConocimientoRespuesta = $evaluacionConocimientoRespuesta;

        return $this;
    }

    /**
     * Get evaluacionConocimientoRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionConocimientoRespuesta()
    {
        return $this->evaluacionConocimientoRespuesta;
    }


    public function setParticipante(\Gt\SistemaBundle\Entity\participante $participante = null)
    {
        $this->participanteId = $participante;

        return $this;
    }
    
    /**
     * Get evaluacionAprendizajes
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionAprendizajes()
    {
        return $this->evaluacionAprendizajes;
    }

    /**
     * Add evaluacionAprendizajes
     * @param \Gt\SistemaBundle\Entity\evaluacionAprendizaje $evaluacionAprendizaje
     * @return participante
     */
    public function addEvaluacionAprendizaje(\Gt\SistemaBundle\Entity\evaluacionAprendizaje $evaluacionAprendizaje) {
        $this->evaluacionAprendizajes[] = $evaluacionAprendizaje;
        $evaluacionAprendizaje->setEvaluacionCompetencia($this);
        return $this;
    }
    
    /**
     * Remove evaluacionAprendizajes
     * @param \Gt\SistemaBundle\Entity\evaluacionAprendizaje $evaluacionAprendizaje
     */
    public function removeEvaluacionAprendizaje(\Gt\SistemaBundle\Entity\evaluacionAprendizaje $evaluacionAprendizaje) {
        $this->evaluacionAprendizajes->removeElement($evaluacionAprendizaje);
    }
    
}
