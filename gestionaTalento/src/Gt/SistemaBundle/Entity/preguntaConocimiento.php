<?php

namespace Gt\SistemaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * preguntaConocimiento
 *
 * @ORM\Table(name="preguntaConocimiento")
 * @ORM\Entity
 */
class preguntaConocimiento
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
//     * ORM\OneToOne(targetEntity="pregunta", inversedBy="preguntaConocimientoId", cascade={"persist"} )
//     * ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
//     */
//    private $preguntaId;
      
    /**
     * @var integer
     *
     * @ORM\Column(name="conocimiento_id", type="integer")
     */
    private $conocimientoId;     

     /**
     * @var string
     *
     * @ORM\Column(name="preguntaConocimientoNombre", type="string", length=50)
     */
    private $preguntaConocimientoNombre; 
    
    
    
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
//     * @return preguntaConocimiento
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
     * Set conocimientoId
     *
     * @param integer $conocimientoId
     * @return preguntaConocimiento
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
     * Set preguntaConocimientoNombre
     *
     * @param string $preguntaConocimientoNombre
     * @return pregunta
     */
    public function setPreguntaConocimientoNombre($preguntaConocimientoNombre)
    {
        $this->preguntaConocimientoNombre = $preguntaConocimientoNombre;

        return $this;
    }

    /**
     * Get preguntaConocimientoNombre
     *
     * @return string 
     */
    public function getPreguntaConocimientoNombre()
    {
        return $this->preguntaConocimientoNombre;
    }
    
    
    public function __toString()
    {
        return $this->getPreguntaConocimientoNombre();
    }
    
//    public function setPregunta(\Gt\SistemaBundle\Entity\pregunta $pregunta = null)
//    {
//        $this->preguntaId = $pregunta;
//
//        return $this;
//    }        
    
}
