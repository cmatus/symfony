<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionPregunta
 *
 * @ORM\Table(name="evaluacionPregunta", indexes={@ORM\Index(name="fk_evaluacionCompetencia", columns={"evaluacionCompetencia_id"})})
 * @ORM\Entity()
 */
class evaluacionPregunta
{
  
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *      
     * @var evaluacionCompetencia
     *
     * @ORM\ManyToOne(targetEntity="evaluacionCompetencia" , inversedBy="evaluacionPreguntas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evaluacionCompetencia_id", referencedColumnName="id")
     * })
     */
    private $evaluacionCompetenciaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="participante_id", type="integer")
     */
    private $participanteId;
               
     /**
     * ORM\OneToOne(targetEntity="preguntaCompetencia")
     * ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     */
    
    /**
     * @var integer
     *
     * @ORM\Column(name="pregunta_id", type="integer")
     */
    private $preguntaId;

//    /**
//    * ORM\OneToOne(targetEntity="preguntaCompetencia",  fetch="EAGER")
//    * ORM\JoinColumn(name="pregunta_id", referencedColumnName="id", nullable=false )    
//    */
//    //private $preguntaCompetencia;
//    
//    private $preguntaCompetenciaNombre;
    
    //private $preguntaCompetencia;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionPreguntaRespuesta", type="integer")
     */
    private $evaluacionPreguntaRespuesta;

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
     * @return evaluacionPregunta
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
     * Set evaluacionCompetenciaId
     *
     * @param integer $evaluacionCompetenciaId
     * @return evaluacionPregunta
     */
    public function setEvaluacionCompetenciaId($evaluacionCompetenciaId)
    {
        $this->evaluacionCompetenciaId = $evaluacionCompetenciaId;

        return $this;
    }

    /**
     * Get evaluacionCompetenciaId
     *
     * @return integer 
     */
    public function getEvaluacionCompetenciaId()
    {
        return $this->evaluacionCompetenciaId;
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
    
    
    
//    /**
//     * Set evaluacionId
//     *
//     * @param integer $evaluacionId
//     * @return evaluacionPregunta
//     */
//    public function setEvaluacionId($evaluacionId)
//    {
//        $this->evaluacionId = $evaluacionId;
//
//        return $this;
//    }
//
//    /**
//     * Get evaluacionId
//     *
//     * @return integer 
//     */
//    public function getEvaluacionId()
//    {
//        return $this->evaluacionId;
//    }
//    
//    /**
//     * Set perfilId
//     *
//     * @param integer $perfilId
//     * @return evaluacionPregunta
//     */
//    public function setPerfilId($perfilId)
//    {
//        $this->perfilId = $perfilId;
//
//        return $this;
//    }
//
//    /**
//     * Get perfilId
//     *
//     * @return integer 
//     */
//    public function getPerfilId()
//    {
//        return $this->perfilId;
//    }
    
    
    /**
     * Set preguntaId
     *
     * @param integer $preguntaId
     * @return evaluacionPregunta
     */
    public function setPreguntaId($preguntaId)
    {
        $this->preguntaId = $preguntaId;

        return $this;
    }

    /**
     * Get preguntaId
     *
     * @return integer 
     */
    public function getPreguntaId()
    {
        return $this->preguntaId;
    }

//    /**
//     * Set preguntaCompetencia
//     *
//     * @param integer $preguntaCompetencia
//     * @return evaluacionPregunta
//     */
//    public function setPreguntaCompetencia($preguntaCompetencia)
//    {
//        $this->preguntaCompetenciaNombre = $preguntaCompetencia;
//
//        return $this;
//    }

//    /**
//     * Get preguntaCompetenciaNombre
//     *
//     * @return integer 
//     */
//    public function getPreguntaCompetenciaNombre()
//    {
//        return $this->preguntaCompetenciaNombre;
//    }
    
    /**
     * Set evaluacionPreguntaRespuesta
     *
     * @param integer $evaluacionPreguntaRespuesta
     * @return evaluacionPregunta
     */
    public function setEvaluacionPreguntaRespuesta($evaluacionPreguntaRespuesta)
    {
        $this->evaluacionPreguntaRespuesta = $evaluacionPreguntaRespuesta;

        return $this;
    }

    /**
     * Get evaluacionPreguntaRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionPreguntaRespuesta()
    {
        return $this->evaluacionPreguntaRespuesta;
    }


    public function setEvaluacionCompetencia(\Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia = null)
    {
        $this->evaluacionCompetenciaId = $evaluacionCompetencia;

        return $this;
    }
    
}
