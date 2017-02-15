<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * perfilConocimiento
 *
 * @ORM\Table(name="perfilConocimiento")
 * @ORM\Entity()
 */
class perfilConocimiento
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
     * @ORM\Column(name="perfil_id", type="integer")
     */
    private $perfilId;    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="conocimiento_id", type="integer")
     */
    private $conocimientoId;
            
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
     * Set conocimientoId
     *
     * @param string $conocimientoId
     * @return perfilConocimiento
     */
    public function setConocimientoId($conocimientoId)
    {
        $this->conocimientoId = $conocimientoId;

        return $this;
    }

    /**
     * Get conocimientoId
     *
     * @return string 
     */
    public function getConocimientoId()
    {
        return $this->conocimientoId;
    }

    
    /**
     * Set perfilId
     *
     * @param string $perfilId
     * @return perfilConocimiento
     */
    public function setPerfilId($perfilId)
    {
        $this->perfilId = $perfilId;

        return $this;
    }

    /**
     * Get perfilId
     *
     * @return string 
     */
    public function getPerfilId()
    {
        return $this->perfilId;
    }           
    
    
}
