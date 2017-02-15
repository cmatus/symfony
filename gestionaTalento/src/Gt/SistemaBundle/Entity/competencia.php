<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * competencia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\competenciaRepository")
 */
class competencia
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
     *
     * @ORM\Column(name="empresa_id", type="integer")
     */
    private $empresaId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="competenciaCodigo", type="string", length=10)
     */
    private $competenciaCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="competenciaNombre", type="string", length=50)
     */
    private $competenciaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="competenciaDefinicion", type="string", length=255)
     */
    private $competenciaDefinicion;

    //############## RELACIONES #################

//    /**
//     * @ORM\OneToMany(targetEntity="evaluacionCompetencia", mappedBy="competenciaId", cascade={"persist"})
//     */
//    private $evaluacionCompetencias;
    

    

    /**
     * Initializes a new ArrayCollection.
     *
     * @param array $elements
     */
    public function __construct()
    {
        //$this->evaluacionCompetencias = new ArrayCollection();
        //$this->preguntaCompetencias = new ArrayCollection();
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
     * @return competencia
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
     * Set competenciaCodigo
     *
     * @param string $competenciaCodigo
     * @return competencia
     */
    public function setCompetenciaCodigo($competenciaCodigo)
    {
        $this->competenciaCodigo = $competenciaCodigo;

        return $this;
    }

    /**
     * Get competenciaCodigo
     *
     * @return string 
     */
    public function getCompetenciaCodigo()
    {
        return $this->competenciaCodigo;
    }
    
    /**
     * Set competenciaNombre
     *
     * @param string $competenciaNombre
     * @return competencia
     */
    public function setCompetenciaNombre($competenciaNombre)
    {
        $this->competenciaNombre = $competenciaNombre;

        return $this;
    }

    /**
     * Get competenciaNombre
     *
     * @return string 
     */
    public function getCompetenciaNombre()
    {
        return $this->competenciaNombre;
    }

    /**
     * Set competenciaDefinicion
     *
     * @param string $competenciaDefinicion
     * @return competencia
     */
    public function setCompetenciaDefinicion($competenciaDefinicion)
    {
        $this->competenciaDefinicion = $competenciaDefinicion;

        return $this;
    }

    /**
     * Get competenciaDefinicion
     *
     * @return string 
     */
    public function getCompetenciaDefinicion()
    {
        return $this->competenciaDefinicion;
    }
    
    //metodo magico para comvertir a texto en listas desplegables
    public function __toString()
    {
        return $this->getCompetenciaNombre();
    }

    
//    /**
//     * Get evaluacionCompetencias
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getEvaluacionCompetencias()
//    {
//        return $this->evaluacionCompetencias;
//    }
                    
}
