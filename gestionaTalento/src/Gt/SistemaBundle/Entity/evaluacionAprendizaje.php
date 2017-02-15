<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionAprendizaje
 *
 * @ORM\Table(name="evaluacionAprendizaje")
 * @ORM\Entity()
 */
class evaluacionAprendizaje
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
     * @ORM\ManyToOne(targetEntity="evaluacionConocimiento" , inversedBy="evaluacionAprendizajes")
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
     * @ORM\Column(name="aprendizaje_id", type="integer")
     */
    private $aprendizajeId;


    
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionAprendizajeRespuesta", type="integer")
     */
    private $evaluacionAprendizajeRespuesta;

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
     * @return evaluacionAprendizaje
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
     * @return evaluacionAprendizaje
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
     * Set aprendizajeId
     *
     * @param integer $aprendizajeId
     * @return evaluacionAprendizaje
     */
    public function setAprendizajeId($aprendizajeId)
    {
        $this->aprendizajeId = $aprendizajeId;

        return $this;
    }

    /**
     * Get aprendizajeId
     *
     * @return integer 
     */
    public function getAprendizajeId()
    {
        return $this->aprendizajeId;
    }


    /**
     * Set evaluacionAprendizajeRespuesta
     *
     * @param integer $evaluacionAprendizajeRespuesta
     * @return evaluacionAprendizaje
     */
    public function setEvaluacionAprendizajeRespuesta($evaluacionAprendizajeRespuesta)
    {
        $this->evaluacionAprendizajeRespuesta = $evaluacionAprendizajeRespuesta;

        return $this;
    }

    /**
     * Get evaluacionAprendizajeRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionAprendizajeRespuesta()
    {
        return $this->evaluacionAprendizajeRespuesta;
    }


    public function setEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento = null)
    {
        $this->evaluacionConocimientoId = $evaluacionConocimiento;

        return $this;
    }
    
}
