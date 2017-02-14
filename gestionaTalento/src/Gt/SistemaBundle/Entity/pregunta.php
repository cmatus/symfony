<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * pregunta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\preguntaRepository")
 */
class pregunta
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
     * @var string
     *
     * @ORM\Column(name="preguntaCodigo", type="string", length=10)
     */
    private $preguntaCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="preguntaNombre", type="string", length=50)
     */
    private $preguntaNombre;   

    /**
     * @var integer
     *
     * @ORM\Column(name="preguntaTipo_id", type="integer")
     */
    private $preguntaTipoId;   
          
    /**
     * @ORM\ManyToMany(targetEntity="clasificacion", inversedBy="preguntas")
     * @ORM\JoinTable(name="preguntaClasificacion")
     */
    private $clasificaciones;

    
    /**
     * @ORM\OneToOne(targetEntity="preguntaCompetencia", mappedBy="preguntaId")
     */
    private $preguntaCompetenciaId;


    /**
     * @ORM\OneToOne(targetEntity="preguntaConocimiento", mappedBy="preguntaId")
     */
    private $preguntaConocimientoId;
    
    
    
    public function __construct()            
    {
        $this->clasificaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    * Set clasificaciones
    *
    * @param integer $clasificaciones
    */
    public function setClasificaciones(ArrayCollection $clasificaciones)
    {
        $this->clasificaciones = $clasificaciones;
    }

    /**
    * Get clasificaciones
    *
    * @return integer
    */
    public function getClasificaciones()
    {
        return $this->clasificaciones;
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
     * Set empresaId
     *
     * @param integer $empresaId
     * @return competencia
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
     * Set preguntaCodigo
     *
     * @param string $preguntaCodigo
     * @return pregunta
     */
    public function setPreguntaCodigo($preguntaCodigo)
    {
        $this->preguntaCodigo = $preguntaCodigo;

        return $this;
    }

    /**
     * Get preguntaCodigo
     *
     * @return string 
     */
    public function getPreguntaCodigo()
    {
        return $this->preguntaCodigo;
    }
    
    /**
     * Set preguntaNombre
     *
     * @param string $preguntaNombre
     * @return pregunta
     */
    public function setPreguntaNombre($preguntaNombre)
    {
        $this->preguntaNombre = $preguntaNombre;

        return $this;
    }

    /**
     * Get preguntaNombre
     *
     * @return string 
     */
    public function getPreguntaNombre()
    {
        return $this->preguntaNombre;
    }

    /**
     * Set preguntaTipoId
     *
     * @param integer $preguntaTipoId
     * @return pregunta
     */
    public function setPreguntaTipoId($preguntaTipoId)
    {
        $this->preguntaTipoId = $preguntaTipoId;

        return $this;
    }

    /**
     * Get preguntaTipoId
     *
     * @return integer 
     */
    public function getPreguntaTipoId()
    {
        return $this->preguntaTipoId;
    }
    

    public function getPreguntaId()
    {
        return $this->preguntaId;
    }
    

    
    
}
