<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuariotipo
 *
 * @ORM\Table(name="usuarioTipo")
 * @ORM\Entity
 */
class usuarioTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuarioTipoNombre", type="string", length=50, nullable=true)
     */
    private $usuarioTipoNombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="usuarioTipoDescripcion", type="string", length=255, nullable=true)
     */
    private $usuarioTipoDescripcion;



    /**
     * Get id
     *
     * @return integer 
     */
    public function setId($id)
    {
        return $this->id=$id;
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
     * Set usuarioTipoNombre
     * @param string $usuarioTipoNombre
     * @return Usuariotipo
     */
    public function setUsuarioTipoNombre($usuarioTipoNombre)
    {
        $this->usuarioTipoNombre = $usuarioTipoNombre;
        return $this;
    }

    /**
     * Get usuarioTipoNombre
     *
     * @return string 
     */
    public function getUsuarioTipoNombre()
    {
        return $this->usuarioTipoNombre;
    }

   

    /**
     * Set usuarioTipoDescripcion
     * @param string $usuarioTipoDescripcion
     * @return Usuariotipo
     */
    public function setUsuarioTipoDescripcion($usuarioTipoDescripcion)
    {
        $this->usuarioTipoNombre = $usuarioTipoDescripcion;
        return $this;
    }

    /**
     * Get usuarioTipoDescripcion
     *
     * @return string 
     */
    public function getUsuarioTipoDescripcion()
    {
        return $this->usuarioTipoDescripcion;
    }

   
}
