<?php

namespace Gt\SistemaBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Rol implements RoleInterface {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * @ORM\Column(name="rol", type="string", length=45, unique=true)
     */
    private $rol;
    
    /**
     * @ORM\ManyToMany(targetEntity="usuario", mappedBy="roles")
     */
    private $usuario;
    
    public function __construct()
    {
        $this->usuario = new ArrayCollection();
    }
    
    /**
     * Set Role
     *
     * @param string $role
     * @return Role
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }

    public function getRol() {
        return $this->rol;
    }
    
    
    /**
     * Add Users
     * @param \Gt\SistemaBundle\Entity\usuario $usuario
     * @return Rol
     */
    public function addUsuario(\Gt\SistemaBundle\Entity\usuario $usuario)
    {
        $this->usuario[] = $usuario;
        return $this;
    }

    /**
     * Remove usuario
     * @param \Gt\SistemaBundle\Entity\usuario $usuario
     */
    public function removeUsuario(\Gt\SistemaBundle\Entity\usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getRole() {
        return $this->getRol();
    }

}
