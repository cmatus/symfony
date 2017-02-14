<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * evaluacion
 *
 * @ORM\Table(name="evaluacion")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\evaluacionRepository")
 */
class evaluacion
{
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
     * @ORM\Column(name="empresa_id", type="integer")
     */
    private $empresaId;
   
    /**
     * @var string
     *
     * @ORM\Column(name="evaluacionCodigo", type="string", length=10)
     */
    private $evaluacionCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="evaluacionNombre", type="string", length=50)
     */
    private $evaluacionNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluacionDefinicion", type="string", length=255)
     */
    private $evaluacionDefinicion;

    //############## RELACIONES #################

    /**
     * ORM\OneToMany(targetEntity="evaluacionCompetencia", mappedBy="evaluacionId", cascade={"persist"})
     */
    private $evaluacionCompetencias;
    
    /**
     * ORM\OneToMany(targetEntity="evaluacionConocimiento", mappedBy="evaluacionId", cascade={"persist"})
     */
    private $evaluacionConocimientos;
    
    
    /**
     * Initializes a new ArrayCollection.
     *
     * @param array $elements
     */
    public function __construct()
    {
        $this->evaluacionCompetencias = new ArrayCollection();
        $this->evaluacionConocimientos = new ArrayCollection();
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
     * @param integer $empresaId
     * @return Dte
     */
    public function setEmpresaId($empresaId) {
        $this->empresaId = $empresaId;
        return $this;
    }

    /**
     * Get empresaId
     * @return integer 
     */
    public function getEmpresaId() {
        return $this->empresaId;
    }
            
    /**
     * Set evaluacionCodigo
     *
     * @param string $evaluacionCodigo
     * @return evaluacion
     */
    public function setEvaluacionCodigo($evaluacionCodigo)
    {
        $this->evaluacionCodigo = $evaluacionCodigo;

        return $this;
    }

    /**
     * Get evaluacionCodigo
     *
     * @return string 
     */
    public function getEvaluacionCodigo()
    {
        return $this->evaluacionCodigo;
    }
    
    /**
     * Set evaluacionNombre
     *
     * @param string $evaluacionNombre
     * @return evaluacion
     */
    public function setEvaluacionNombre($evaluacionNombre)
    {
        $this->evaluacionNombre = $evaluacionNombre;

        return $this;
    }

    /**
     * Get evaluacionNombre
     *
     * @return string 
     */
    public function getEvaluacionNombre()
    {
        return $this->evaluacionNombre;
    }

    /**
     * Set evaluacionDefinicion
     *
     * @param string $evaluacionDefinicion
     * @return evaluacion
     */
    public function setEvaluacionDefinicion($evaluacionDefinicion)
    {
        $this->evaluacionDefinicion = $evaluacionDefinicion;

        return $this;
    }

    /**
     * Get evaluacionDefinicion
     *
     * @return string 
     */
    public function getEvaluacionDefinicion()
    {
        return $this->evaluacionDefinicion;
    }
    
    //    /**
    //     * Add evaluacionCompetencias
    //     *
    //     * @param EvaluacionCompetencia $evaluacionCompetencia
    //     * @return Product
    //     */
    //    public function addEvaluacionCompetencia(\AppBundle\Entity\evaluacionCompetencia $evaluacionCompetencia)
    //    {
    //        $evaluacionCompetencia->setProduct($this);
    //        $this->evaluacionCompetencias[] = $evaluacionCompetencia;
    //        return $this;
    //    }
    //    /**
    //     * Remove evaluacionCompetencias
    //     *
    //     * @param EvaluacionCompetencia $evaluacionCompetencia
    //     */
    //    public function removeEvaluacionCompetencia(\AppBundle\Entity\evaluacionCompetencia $evaluacionCompetencia)
    //    {
    //        $this->evaluacionCompetencias->removeElement($evaluacionCompetencia);
    //    }
    //    /**
    //     * Set evaluacionCompetencias
    //     *
    //     * @param $evaluacionCompetencias
    //     */
    //    public function setEvaluacionCompetencias($evaluacionCompetencias)
    //    {
    //        $this->evaluacionCompetencias = new ArrayCollection();
    //        foreach($evaluacionCompetencias as $evaluacionCompetencia) {
    //            $this->addEvaluacionCompetencia($evaluacionCompetencia);
    //        }
    //    }
    //    
    //    
    /**
     * Get evaluacionCompetencias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionCompetencias()
    {
        return $this->evaluacionCompetencias;
    }
    
    /**
     * Get evaluacionConocimientos
     *
     * @return \Doctrine\Common\Collections\Collection
     */    
    public function getEvaluacionConocimientos()
    {
        return $this->evaluacionConocimientos;
    }
    
    
}
