<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * participante
 *
 * @ORM\Table(name="participante")
 * @ORM\Entity()
 */
class participante
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
     * @ORM\Column(name="evaluacion_id", type="integer")
     */
    private $evaluacionId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="persona_id", type="integer")
     */
    private $personaId;    

    //############## RELACIONES #################

    /**
     * ORM\OneToMany(targetEntity="evaluacionCompetencia", mappedBy="participanteId", cascade={"persist"})
     */
    private $evaluacionCompetencias;

    /**
     * ORM\OneToMany(targetEntity="evaluacionConocimiento", mappedBy="participanteId", cascade={"persist"})
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
     * Set evaluacionId
     *
     * @param string $evaluacionId
     * @return participante
     */
    public function setEvaluacionId($evaluacionId)
    {
        $this->evaluacionId = $evaluacionId;

        return $this;
    }

    /**
     * Get evaluacionId
     *
     * @return string 
     */
    public function getEvaluacionId()
    {
        return $this->evaluacionId;
    }

    
    /**
     * Set perfilId
     *
     * @param string $perfilId
     * @return participante
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
     
    /**
     * Set personaId
     *
     * @param string $personaId
     * @return participante
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId
     *
     * @return string 
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }
       
    /**
     * Get evaluacionCompetencias
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionCompetencias()
    {
        return $this->evaluacionCompetencias;
    }

    /**
     * Add evaluacionCompetencias
     * @param \Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia
     * @return participante
     */
    public function addEvaluacionCompetencia(\Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia) {
        $this->evaluacionCompetencias[] = $evaluacionCompetencia;
        $evaluacionCompetencia->setParticipante($this);
        return $this;
    }
    
    /**
     * Remove evaluacionCompetencias
     * @param \Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia
     */
    public function removeEvaluacionCompetencia(\Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia) {
        $this->evaluacionCompetencias->removeElement($evaluacionCompetencia);
    }


    /**
     * Get evaluacionConocimientos
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluacionConocimientos()
    {
        return $this->evaluacionConocimientos;
    }

    /**
     * Add evaluacionConocimientos
     * @param \Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento
     * @return participante
     */
    public function addEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento) {
        $this->evaluacionConocimientos[] = $evaluacionConocimiento;
        $evaluacionConocimiento->setParticipante($this);
        return $this;
    }
    
    /**
     * Remove evaluacionConocimientos
     * @param \Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento
     */
    public function removeEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento) {
        $this->evaluacionConocimientos->removeElement($evaluacionConocimiento);
    }


    
}
