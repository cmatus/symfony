<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresaUsuario
 *
 * @ORM\Table(name="empresaUsuario")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\empresaUsuarioRepository")
 */
class empresaUsuario
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
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuarioTipo_id", type="integer")
     */
    private $usuarioTipoId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="empresaUsuarioDefault", type="boolean")
     */
    private $empresaUsuarioDefault;


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
     * @return empresaUsuario
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return empresaUsuario
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set usuarioTipoId
     *
     * @param integer $usuarioTipoId
     * @return empresaUsuario
     */
    public function setUsuarioTipoId($usuarioTipoId)
    {
        $this->usuarioTipoId = $usuarioTipoId;

        return $this;
    }

    /**
     * Get usuarioTipoId
     *
     * @return integer 
     */
    public function getUsuarioTipoId()
    {
        return $this->usuarioTipoId;
    }
    
    
    /**
     * Set empresaUsuarioDefault
     *
     * @param integer $empresaUsuarioDefault
     * @return empresaUsuarioDefault
     */
    public function setEmpresaUsuarioDefault($empresaUsuarioDefault)
    {
        $this->empresaUsuarioDefault = $empresaUsuarioDefault;

        return $this;
    }

    /**
     * Get empresaUsuarioDefault
     *
     * @return integer 
     */
    public function getEmpresaUsuarioDefault()
    {
        return $this->empresaUsuarioDefault;
    }
}
