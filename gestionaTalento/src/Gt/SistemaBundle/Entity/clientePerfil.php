<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * clientePerfil
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class clientePerfil
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
     * @ORM\Column(name="empresaId", type="integer")
     */
    private $empresaId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="clienteId", type="integer")
     */
    private $clienteId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="clientePerfilCodigo", type="string", length=10)
     */
    private $clientePerfilCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="clientePerfilNombre", type="string", length=50)
     */
    private $clientePerfilNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="clientePerfilDefinicion", type="string", length=255)
     */
    private $clientePerfilDefinicion;


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
     * @param string $empresaId
     * @return clientePerfil
     */
    public function setEmpresaId($empresaId)
    {
        $this->empresaId = $empresaId;

        return $this;
    }

    /**
     * Get empresaId
     *
     * @return string 
     */
    public function getEmpresaId()
    {
        return $this->empresaId;
    }

    /**
     * Set clienteId
     *
     * @param string $clienteId
     * @return clientePerfil
     */
    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return string 
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }
    
    
    /**
     * Set clientePerfilCodigo
     *
     * @param string $clientePerfilCodigo
     * @return clientePerfil
     */
    public function setClientePerfilCodigo($clientePerfilCodigo)
    {
        $this->clientePerfilCodigo = $clientePerfilCodigo;

        return $this;
    }

    /**
     * Get clientePerfilCodigo
     *
     * @return string 
     */
    public function getClientePerfilCodigo()
    {
        return $this->clientePerfilCodigo;
    }
    
    /**
     * Set clientePerfilNombre
     *
     * @param string $clientePerfilNombre
     * @return clientePerfil
     */
    public function setClientePerfilNombre($clientePerfilNombre)
    {
        $this->clientePerfilNombre = $clientePerfilNombre;

        return $this;
    }

    /**
     * Get clientePerfilNombre
     *
     * @return string 
     */
    public function getClientePerfilNombre()
    {
        return $this->clientePerfilNombre;
    }

    /**
     * Set clientePerfilDefinicion
     *
     * @param string $clientePerfilDefinicion
     * @return clientePerfil
     */
    public function setClientePerfilDefinicion($clientePerfilDefinicion)
    {
        $this->clientePerfilDefinicion = $clientePerfilDefinicion;

        return $this;
    }

    /**
     * Get clientePerfilDefinicion
     *
     * @return string 
     */
    public function getClientePerfilDefinicion()
    {
        return $this->clientePerfilDefinicion;
    }
}
