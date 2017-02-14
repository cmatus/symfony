<?php
namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


//use Symfony\Component\Security\Core\User\EquatableInterface;
//use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * Gt\SistemaBundle\Entity\usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\usuarioRepository")
 */
class usuario implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
       
    public function getId(){ return $this->id; }

    /**
     * @ORM\Column(name="username", type="string", length=155, unique=true)
     * Assert\Email(
     *     message = "El correo '{{ value }}' no es valido.",
     *     checkMX = true
     * )
     * @Assert\Length(
     *      min = "0",
     *      max = "50",
     *      minMessage = "El correo por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "El correo no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    protected $username;
    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername( $username )
    {
        $this->email = $username ;
        $this->usuarioMail = $username ;
        $this->username = $username ;
    }
    /**
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     * Assert\Email( message = "El correo '{{ value }}' no es valido." )
     * Assert\Length(
     *      min = "0",
     *      max = "50",
     *      minMessage = "El correo por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "El correo no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    protected $email;
    public function setEmail( $email )
    {
        $this->email = $email ;
        $this->usuarioMail = $email ;
        $this->username = $email ;
    }
    public function getEmail()
    {
        return $this->email ;
    }
    /**
     * @ORM\Column(name="usuarioMail", type="string", length=60, unique=true)
     * Assert\Email( message = "El correo '{{ value }}' no es valido." )
     * @Assert\Length(
     *      min = "0",
     *      max = "50",
     *      minMessage = "El correo por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "El correo no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    protected $usuarioMail ;
    public function setUsuariomail( $email )
    { 
        $this->email = $email ;
        $this->usuarioMail = $email ;
        $this->username = $email ; 
    }
    public function getUsuariomail()
    { 
        return $this->getEmail(); 
    }


    /**
     * @ORM\Column(name="salt", type="string", length=32)
     */
    protected $salt;
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @ORM\Column(name="password", type="string", length=40)
     * Assert\Length(
     *      min = "0",
     *      max = "40",
     *      minMessage = "La contraseña por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "La contraseña no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    protected $password;
    /**
     * @inheritDoc
     */
    public function setPassword( $password )
    {
        $this->password = $password;
        $this->usuarioClave = $password ;
    }
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @ORM\Column(name="usuarioClave", type="string", length=40)
     * Assert\Length(
     *      min = "0",
     *      max = "40",
     *      minMessage = "La contraseña por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "La contraseña no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    protected $usuarioClave ;
    public function setUsuarioClave( $password )
    {
        $this->password = $password;
        $this->usuarioClave = $password ;
    }
    public function getUsuarioClave()
    {
        return $this->getPassword();
    }


    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;
    public function setIsActive( $active )
    {
        $this->isActive = $active ;
    }
    public function getIsActive()
    {
        return $this->isActive ;
    }

    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isActive = false;
        $this->salt = md5(uniqid(null, true));
        
    }


    /**
     * @ORM\ManyToMany(targetEntity="Rol", inversedBy="usuario")
     * @ORM\JoinTable(name="usuarioRol",
     *     joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="rol_id", referencedColumnName="id")}
     * )
     */
    protected $roles;

    /**
     * Add Roles
     * @param \Gt\SistemaBundle\Entity\Rol $roles
     * @return Users
     */
    public function addRole(\Gt\SistemaBundle\Entity\Rol $roles)
    {
        $this->roles[] = $roles;
        return $this;
    }

    /**
     * Remove Roles
     * @param \Gt\SistemaBundle\Entity\Rol $roles
     */
    public function removeRole(\Gt\SistemaBundle\Entity\Rol $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array( 
                $this->id,
                $this->email,
                $this->password,
                $this->salt
            ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->salt
        ) = unserialize($serialized);
    }


    public function isEqualTo(UserInterface $user)
    {
        return $this->id === $user->getId();
    }



    // ################### Modelo Login ###################


    /**
     * @ORM\ManyToOne(targetEntity="usuarioTipo", inversedBy="tipo")
     * @ORM\JoinColumn(name="usuarioTipo_id", referencedColumnName="id")
     */
//    private $id_usuarioTipo ;
//    public function setIdUsuarioTipo(\Gt\SistemaBundle\Entity\usuarioTipo $tipo = null )
//    public function setIdUsuarioTipo( $tipo = null )
//    {
//        $this->id_usuarioTipo = $tipo ;
//        return $this;
//    }
//    public function getIdUsuarioTipo()
//    {
//        return $this->id_usuarioTipo ;
//    }

    /**
        ORM\Column(name="usuarioNombre", type="string", length=25 )
     * @Assert\NotBlank( message = "El nombre no puede ser vacio." )
     */
    private $usuarioNombre ; 
    public function setUsuarioNombre( $nombre )
    { 
        $this->usuarioNombre = $nombre ;
    }
    public function getUsuarioNombre()
    { 
        return $this->usuarioNombre; 
    }


    /**
     * ORM\Column(name="usuarioApellidos", type="string", length=25 )
     * @Assert\NotBlank( message = "El apellido no puede ser vacio." )
     */
    private $usuarioApellidos ; 
    public function setUsuarioapellidos( $apellido )
    {
        $this->usuarioApellidos = $apellido ;
    }
    public function getUsuarioapellidos()
    {
        return $this->usuarioApellidos ;
    }


    /**
     * ORM\Column(name="usuarioRut", type="string", length=10 )
     * @Assert\Length(
     *      min = "3",
     *      max = "10",
     *      minMessage = "El Rut por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "El Rut no puede tener más de {{ limit }} caracteres de largo"
     * )
     */
    private $usuarioRut ;
    public function setUsuariorut( $rut )
    {
        $this->usuarioRut = $rut ;
    }
    public function getUsuariorut()
    {
        return $this->usuarioRut ;
    }
    
    /**
     * ORM\Column(name="id_perfilEmpresa" , type="integer" )
     */
    private $idPerfilempresa ;          
    public function setIdPerfilempresa( $idPerfilempresa )
    {
        $this->idPerfilempresa = $idPerfilempresa ;
    }
    public function getIdPerfilempresa()
    {
        return $this->idPerfilempresa ;
    }

    /**
     * Set salt
     * @param string $salt
     * @return usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    
    
    /**
     * ORM\Column(name="id_usuarioTipo" , type="integer" )
     */
    private $idUsuarioTipo ;          
    public function setIdUsuarioTipo( $idUsuarioTipo )
    {
        $this->idUsuarioTipo = $idUsuarioTipo ;
    }
    public function getIdUsuarioTipo()
    {
        return $this->idUsuarioTipo ;
    }
    
    
    
}
