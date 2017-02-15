<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionCompetencia
 *
 * @ORM\Table(name="evaluacionCompetencia" )
 * @ORM\Entity()
 */
class evaluacionCompetencia
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
     * @ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionCompetenciaRespuesta", type="integer")
     */
    private $evaluacionCompetenciaRespuesta;

    /**
     * @ORM\OneToMany(targetEntity="evaluacionPregunta", mappedBy="evaluacionCompetenciaId", cascade={"persist"})
     */
    private $evaluacionPreguntas;
    
    
    public function __construct()
    {
        $this->evaluacionPreguntas = new ArrayCollection();
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
     * @return evaluacionCompetencia
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
     * Set competenciaId
     *
     * @param integer $competenciaId
     * @return evaluacionCompetencia
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
     * Set evaluacionCompetenciaRespuesta
     *
     * @param integer $evaluacionCompetenciaRespuesta
     * @return evaluacionCompetencia
     */
    public function setEvaluacionCompetenciaRespuesta($evaluacionCompetenciaRespuesta)
    {
        $this->evaluacionCompetenciaRespuesta = $evaluacionCompetenciaRespuesta;

        return $this;
    }

    /**
     * Get evaluacionCompetenciaRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionCompetenciaRespuesta()
    {
        return $this->evaluacionCompetenciaRespuesta;
    }


    /**
     * Get evaluacionPreguntas
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionPreguntas()
    {
        return $this->evaluacionPreguntas;
    }

    /**
     * Add evaluacionPreguntas
     * @param \Gt\SistemaBundle\Entity\evaluacionPregunta $evaluacionPregunta
     * @return participante
     */
    public function addEvaluacionPregunta(\Gt\SistemaBundle\Entity\evaluacionPregunta $evaluacionPregunta) {
        $this->evaluacionPreguntas[] = $evaluacionPregunta;
        $evaluacionPregunta->setEvaluacionCompetencia($this);
        return $this;
    }
    
    /**
     * Remove evaluacionPreguntas
     * @param \Gt\SistemaBundle\Entity\evaluacionPregunta $evaluacionPregunta
     */
    public function removeEvaluacionPregunta(\Gt\SistemaBundle\Entity\evaluacionPregunta $evaluacionPregunta) {
        $this->evaluacionPreguntas->removeElement($evaluacionPregunta);
    }
    
    
}
