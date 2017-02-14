<?php

namespace Gt\SistemaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * preguntaCompetencia
 *
 * @ORM\Table(name="preguntaCompetencia")
 * @ORM\Entity
 */
class preguntaCompetencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

//    /**
//     * @ORM\OneToOne(targetEntity="pregunta", inversedBy="preguntaCompetenciaId", cascade={"persist"} )
//     * @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
//     */        
//    private $preguntaId;

//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="competencia_id", type="integer")
//     */        
    
    /**
     * ORM\OneToOne(targetEntity="pregunta", inversedBy="competenciaId" )
     * ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;
    

    /**
     * @var string
     *
     * @ORM\Column(name="preguntaCompetenciaNombre", type="string", length=50)
     */
    private $preguntaCompetenciaNombre; 
    

    public function __construct()            
    {
       // $this->preguntaCompetencias = new ArrayCollection();
        
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

//    /**
//     * Set preguntaId
//     *
//     * @param integer $preguntaId
//     * @return preguntaCompetencia
//     */
//    public function setPreguntaId($preguntaId)
//    {
//        $this->preguntaId = $preguntaId;
//
//        return $this;
//    }
//
//    /**
//     * Get preguntaId
//     *
//     * @return integer 
//     */
//    public function getPreguntaId()
//    {
//        return $this->preguntaId;
//    }

    /**
     * Set competenciaId
     *
     * @param integer $competenciaId
     * @return preguntaCompetencia
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
     * Set preguntaCompetenciaNombre
     *
     * @param string $preguntaCompetenciaNombre
     * @return pregunta
     */
    public function setPreguntaCompetenciaNombre($preguntaCompetenciaNombre)
    {
        $this->preguntaCompetenciaNombre = $preguntaCompetenciaNombre;

        return $this;
    }

    /**
     * Get preguntaCompetenciaNombre
     *
     * @return string 
     */
    public function getPreguntaCompetenciaNombre()
    {
        return $this->preguntaCompetenciaNombre;
    }
    
    
    public function __toString()
    {
        return $this->getPreguntaCompetenciaNombre();
    }
    
//    public function setPregunta(\Gt\SistemaBundle\Entity\pregunta $pregunta = null)
//    {
//        $this->preguntaId = $pregunta;
//
//        return $this;
//    }        
    
}
