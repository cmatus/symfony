<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pregunta
 *
 * @ORM\Table(name="clasificacion")
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\clasificacionRepository")
 */
class clasificacion
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
     * @var string
     *
     * @ORM\Column(name="clasificacionNombre", type="string", length=50)
     */
    private $clasificacionNombre;   

//    /**
//     * ORM\ManyToMany(targetEntity="pregunta", mappedBy="clasificaciones")
//     */
//    private $preguntas;
// 
//    public function __construct()            
//    {
//        $this->preguntas = new \Doctrine\Common\Collections\ArrayCollection();
//    }
 
//    public function addPreguntaClasificacion(PreguntaClasificacion $preguntaClasificacion)
//    {
//        $preguntaClasificacion->setProduct($this);
//        $this->preguntaClasificaciones[] = $preguntaClasificacion;
//        return $this;
//    }
// 
//    public function removePreguntaClasificacion(PreguntaClasificacion $preguntaClasificacion)
//    {
//        $this->preguntaClasificaciones->removeElement($preguntaClasificacion);
//    }
    
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
     * Set clasificacionNombre
     *
     * @param string $clasificacionNombre
     * @return pregunta
     */
    public function setClasificacionNombre($clasificacionNombre)
    {
        $this->clasificacionNombre = $clasificacionNombre;

        return $this;
    }

    /**
     * Get clasificacionNombre
     *
     * @return string 
     */
    public function getClasificacionNombre()
    {
        return $this->clasificacionNombre;
    }

    //metodo magico para comvertir a texto en listas desplegables
    public function __toString()
    {
        return $this->getClasificacionNombre();
    }
    
}
