<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionCriterio
 *
 * @ORM\Table(name="evaluacionCriterio")
 * @ORM\Entity()
 */
class evaluacionCriterio
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
     * @var evaluacionActividadClave
     *
     * @ORM\ManyToOne(targetEntity="evaluacionActividadClave" , inversedBy="evaluacionCriterios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evaluacionActividadClave_id", referencedColumnName="id")
     * })
     */
    private $evaluacionActividadClaveId;

    /**
     * @var integer
     *
     * @ORM\Column(name="participante_id", type="integer")
     */
    private $participanteId;
               
    
    /**
     * @var integer
     *
     * @ORM\Column(name="criterio_id", type="integer")
     */
    private $criterioId;


    
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionCriterioRespuesta", type="integer")
     */
    private $evaluacionCriterioRespuesta;

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
     * @return evaluacionCriterio
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
     * Set evaluacionActividadClaveId
     *
     * @param integer $evaluacionActividadClaveId
     * @return evaluacionCriterio
     */
    public function setEvaluacionActividadClaveId($evaluacionActividadClaveId)
    {
        $this->evaluacionActividadClaveId = $evaluacionActividadClaveId;

        return $this;
    }

    /**
     * Get evaluacionActividadClaveId
     *
     * @return integer 
     */
    public function getEvaluacionActividadClaveId()
    {
        return $this->evaluacionActividadClaveId;
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
     * Set criterioId
     *
     * @param integer $criterioId
     * @return evaluacionCriterio
     */
    public function setCriterioId($criterioId)
    {
        $this->criterioId = $criterioId;

        return $this;
    }

    /**
     * Get criterioId
     *
     * @return integer 
     */
    public function getCriterioId()
    {
        return $this->criterioId;
    }


    /**
     * Set evaluacionCriterioRespuesta
     *
     * @param integer $evaluacionCriterioRespuesta
     * @return evaluacionCriterio
     */
    public function setEvaluacionCriterioRespuesta($evaluacionCriterioRespuesta)
    {
        $this->evaluacionCriterioRespuesta = $evaluacionCriterioRespuesta;

        return $this;
    }

    /**
     * Get evaluacionCriterioRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionCriterioRespuesta()
    {
        return $this->evaluacionCriterioRespuesta;
    }


    public function setEvaluacionActividadClave(\Gt\SistemaBundle\Entity\evaluacionActividadClave $evaluacionActividadClave = null)
    {
        $this->evaluacionActividadClaveId = $evaluacionActividadClave;

        return $this;
    }
    
}
