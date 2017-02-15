<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\personaRepository")
 */
class persona
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
     * @var integer
     * @ORM\Column(name="perfil_id", type="integer")
     */
    private $perfilId;
    
    /**
     * @var integer
     * @ORM\Column(name="persona_id", type="integer")
     */
    private $personaId;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="personaRut", type="string", length=10)
     */
    private $personaRut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="personaNombre", type="string", length=255)
     */
    private $personaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="personaCorreo", type="string", length=255)
     */
    private $personaCorreo;
    
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
     * Set perfilId
     * @param integer $perfilId
     * @return persona
     */
    public function setPerfilId($perfilId) {
        $this->perfilId = $perfilId;
        return $this;
    }

    /**
     * Get perfilId
     * @return integer 
     */
    public function getPerfilId() {
        return $this->perfilId;
    }
    
    /**
     * Set personaId
     * @param integer $personaId
     * @return persona
     */
    public function setPersonaId($personaId) {
        $this->personaId = $personaId;
        return $this;
    }

    /**
     * Get personaId
     * @return integer 
     */
    public function getPersonaId() {
        return $this->personaId;
    }
            
    /**
     * Set personaRut
     *
     * @param string $personaRut
     * @return persona
     */
    public function setPersonaRut($personaRut)
    {
        $this->personaRut = $personaRut;

        return $this;
    }

    /**
     * Get personaRut
     *
     * @return string 
     */
    public function getPersonaRut()
    {
        return $this->personaRut;
    }
                
    /**
     * Set personaNombre
     *
     * @param string $personaNombre
     * @return personaNombre
     */
    public function setPersonaNombre($personaNombre)
    {
        $this->personaNombre = $personaNombre;

        return $this;
    }

    /**
     * Get personaNombre
     *
     * @return string 
     */
    public function getPersonaNombre()
    {
        return $this->personaNombre;
    }

    
    /**
     * Set personaCorreo
     *
     * @param string $personaCorreo
     * @return persona
     */
    public function setPersonaCorreo($personaCorreo)
    {
        $this->personaCorreo = $personaCorreo;

        return $this;
    }

    /**
     * Get personaCorreo
     *
     * @return string 
     */
    public function getPersonaCorreo()
    {
        return $this->personaCorreo;
    }
    
    
    
}
