<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * actividadClave
 *
 * @ORM\Table(name="criterio")
 * @ORM\Entity()
 */
class criterio {
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
     * @ORM\Column(name="actividadClave_id", type="integer")
     */
    private $actividadClaveId;
              
    /**
     * @var string
     *
     * @ORM\Column(name="criterioDescripcion", type="string", length=255)
     */
    private $criterioDescripcion;
       
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
     * Set actividadClaveId
     *
     * @param integer $actividadClaveId
     * @return actividadClave
     */
    public function setActividadClaveId($actividadClaveId)
    {
        $this->actividadClaveId = $actividadClaveId;

        return $this;
    }

    /**
     * Get actividadClaveId
     *
     * @return integer 
     */
    public function getActividadClaveId()
    {
        return $this->actividadClaveId;
    }
               
    /**
     * Set criterioDescripcion
     *
     * @param string $criterioDescripcion
     * @return actividadClave
     */
    public function setCriterioDescripcion($criterioDescripcion)
    {
        $this->criterioDescripcion = $criterioDescripcion;

        return $this;
    }

    /**
     * Get criterioDescripcion
     *
     * @return string 
     */
    public function getCriterioDescripcion()
    {
        return $this->criterioDescripcion;
    }

    
}
