<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * clienteCompetencia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\clienteCompetenciaRepository")
 */
class clienteCompetencia
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
     * @var integer
     *
     * @ORM\Column(name="cliente_id", type="integer")
     */
    private $clienteId;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="clienteCompetenciaCodigo", type="string", length=10)
     */
    private $clienteCompetenciaCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="clienteCompetenciaNombre", type="string", length=50)
     */
    private $clienteCompetenciaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="clienteCompetenciaDefinicion", type="string", length=255)
     */
    private $clienteCompetenciaDefinicion;


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
     * @return clienteCompetencia
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
     * Set clienteId
     *
     * @param integer $clienteId
     * @return clienteCompetencia
     */
    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return integer
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }

    
    /**
     * Set clienteCompetenciaCodigo
     *
     * @param string $clienteCompetenciaCodigo
     * @return clienteCompetencia
     */
    public function setClienteCompetenciaCodigo($clienteCompetenciaCodigo)
    {
        $this->clienteCompetenciaCodigo = $clienteCompetenciaCodigo;

        return $this;
    }

    /**
     * Get clienteCompetenciaCodigo
     *
     * @return string 
     */
    public function getClienteCompetenciaCodigo()
    {
        return $this->clienteCompetenciaCodigo;
    }
    
    /**
     * Set clienteCompetenciaNombre
     *
     * @param string $clienteCompetenciaNombre
     * @return clienteCompetencia
     */
    public function setClienteCompetenciaNombre($clienteCompetenciaNombre)
    {
        $this->clienteCompetenciaNombre = $clienteCompetenciaNombre;

        return $this;
    }

    /**
     * Get clienteCompetenciaNombre
     *
     * @return string 
     */
    public function getClienteCompetenciaNombre()
    {
        return $this->clienteCompetenciaNombre;
    }

    /**
     * Set clienteCompetenciaDefinicion
     *
     * @param string $clienteCompetenciaDefinicion
     * @return clienteCompetencia
     */
    public function setClienteCompetenciaDefinicion($clienteCompetenciaDefinicion)
    {
        $this->clienteCompetenciaDefinicion = $clienteCompetenciaDefinicion;

        return $this;
    }

    /**
     * Get clienteCompetenciaDefinicion
     *
     * @return string 
     */
    public function getClienteCompetenciaDefinicion()
    {
        return $this->clienteCompetenciaDefinicion;
    }
}
