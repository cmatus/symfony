<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * perfilCompetencia
 *
 * @ORM\Table(name="perfilCompetencia")
 * @ORM\Entity()
 */
class perfilCompetencia
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
     * @ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;
        
//    /**
//    * @ORM\OneToOne(targetEntity="competencia",  fetch="EAGER")
//    * @ORM\JoinColumn(name="competencia_id", referencedColumnName="id")    
//    */
//        
//    private $competenciaNombre;
                
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
     * Set competenciaId
     *
     * @param string $competenciaId
     * @return perfilCompetencia
     */
    public function setCompetenciaId($competenciaId)
    {
        $this->competenciaId = $competenciaId;

        return $this;
    }

    /**
     * Get competenciaId
     *
     * @return string 
     */
    public function getCompetenciaId()
    {
        return $this->competenciaId;
    }

//    /**
//     * Get competenciaNombre
//     *
//     * @return integer 
//     */
//    public function getCompetenciaNombre()
//    {
//        return $this->competenciaNombre;
//    }
    
    
    /**
     * Set perfilId
     *
     * @param string $perfilId
     * @return perfilCompetencia
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
