<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * evaluacionIndicador
 *
 * @ORM\Table(name="evaluacionIndicador")
 * @ORM\Entity()
 */
class evaluacionIndicador
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
     * @ORM\ManyToOne(targetEntity="evaluacionConocimiento" , inversedBy="evaluacionIndicadors")
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
     * @ORM\Column(name="indicador_id", type="integer")
     */
    private $indicadorId;


    
    /**
     * @var integer
     *
     * @ORM\Column(name="evaluacionIndicadorRespuesta", type="integer")
     */
    private $evaluacionIndicadorRespuesta;

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
     * @return evaluacionIndicador
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
     * @return evaluacionIndicador
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
     * Set indicadorId
     *
     * @param integer $indicadorId
     * @return evaluacionIndicador
     */
    public function setIndicadorId($indicadorId)
    {
        $this->indicadorId = $indicadorId;

        return $this;
    }

    /**
     * Get indicadorId
     *
     * @return integer 
     */
    public function getIndicadorId()
    {
        return $this->indicadorId;
    }


    /**
     * Set evaluacionIndicadorRespuesta
     *
     * @param integer $evaluacionIndicadorRespuesta
     * @return evaluacionIndicador
     */
    public function setEvaluacionIndicadorRespuesta($evaluacionIndicadorRespuesta)
    {
        $this->evaluacionIndicadorRespuesta = $evaluacionIndicadorRespuesta;

        return $this;
    }

    /**
     * Get evaluacionIndicadorRespuesta
     *
     * @return integer 
     */
    public function getEvaluacionIndicadorRespuesta()
    {
        return $this->evaluacionIndicadorRespuesta;
    }


    public function setEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento = null)
    {
        $this->evaluacionConocimientoId = $evaluacionConocimiento;

        return $this;
    }
    
}