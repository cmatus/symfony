<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionPreguntaConocimiento
 *
 * @ORM\Table(name="evaluacionPreguntaConocimiento", indexes={@ORM\Index(name="fk_evaluacionConocimiento", columns={"evaluacionConocimiento_id"})})
 * @ORM\Entity()
 */
class evaluacionPreguntaConocimiento
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
     * @var evaluacionConocimiento
     *
     * @ORM\ManyToOne(targetEntity="evaluacionConocimiento" , inversedBy="evaluacionPreguntaConocimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evaluacionConocimiento_id", referencedColumnName="id")
     * })
     */
    private $evaluacionConocimientoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="participante_id", type="integer")
     */
    private $participanteId;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="pregunta_id", type="integer")
     */
    private $preguntaId;

    private $preguntaNombre;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionPreguntaConocimientoRespuesta", type="integer")
     */
    private $evaluacionPreguntaConocimientoRespuesta;

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
     * @return evaluacionPreguntaConocimiento
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
     * Set evaluacionConocimientoId
     *
     * @param integer $evaluacionConocimientoId
     * @return evaluacionPreguntaConocimiento
     */
    public function setEvaluacionConocimientoId($evaluacionConocimientoId)
    {
        $this->evaluacionConocimientoId = $evaluacionConocimientoId;

        return $this;
    }

    /**
     * Get evaluacionConocimientoId
     *
     * @return integer 
     */
    public function getEvaluacionConocimientoId()
    {
        return $this->evaluacionConocimientoId;
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
     * Set preguntaId
     *
     * @param integer $preguntaId
     * @return evaluacionPreguntaConocimiento
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

        /**
     * Set preguntaNombre
     *
     * @param integer $preguntaNombre
     * @return evaluacionPreguntaConocimiento
     */
    public function setPreguntaNombre($preguntaNombre)
    {
        $this->preguntaNombre = $preguntaNombre;

        return $this;
    }

    /**
     * Get preguntaNombre
     *
     * @return integer 
     */
    public function getPreguntaNombre()
    {
        return $this->preguntaNombre;
    }
    
    /**
     * Set evaluacionPreguntaConocimientoRespuesta
     *
     * @param integer $evaluacionPreguntaConocimientoRespuesta
     * @return evaluacionPreguntaConocimiento
     */
    public function setEvaluacionPreguntaConocimientoRespuesta($evaluacionPreguntaConocimientoRespuesta)
    {
        $this->evaluacionPreguntaConocimientoRespuesta = $evaluacionPreguntaConocimientoRespuesta;

        return $this;
    }

    /**
     * Get evaluacionPreguntaConocimientoRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionPreguntaConocimientoRespuesta()
    {
        return $this->evaluacionPreguntaConocimientoRespuesta;
    }


    public function setEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento = null)
    {
        $this->evaluacionConocimientoId = $evaluacionConocimiento;

        return $this;
    }
    
}
