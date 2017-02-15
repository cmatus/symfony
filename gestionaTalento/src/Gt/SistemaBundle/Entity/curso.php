<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * curso
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class curso
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
     * @ORM\Column(name="cursoCodigo", type="string", length=10)
     */
    private $cursoCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cursoNombre", type="string", length=50)
     */
    private $cursoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cursoHoras", type="string", length=10)
     */
    private $cursoHoras;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cursoObjetivo", type="string", length=255)
     */
    private $cursoObjetivo;

    //############## RELACIONES #################

//    /**
//     * @ORM\OneToMany(targetEntity="evaluacionCurso", mappedBy="cursoId", cascade={"persist"})
//     */
//    private $evaluacionCursos;
    

    

    /**
     * Initializes a new ArrayCollection.
     *
     * @param array $elements
     */
    public function __construct()
    {
        //$this->evaluacionCursos = new ArrayCollection();
        //$this->preguntaCursos = new ArrayCollection();
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
     * @return curso
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
     * Set cursoCodigo
     *
     * @param string $cursoCodigo
     * @return curso
     */
    public function setCursoCodigo($cursoCodigo)
    {
        $this->cursoCodigo = $cursoCodigo;

        return $this;
    }

    /**
     * Get cursoCodigo
     *
     * @return string 
     */
    public function getCursoCodigo()
    {
        return $this->cursoCodigo;
    }
    
    /**
     * Set cursoNombre
     *
     * @param string $cursoNombre
     * @return curso
     */
    public function setCursoNombre($cursoNombre)
    {
        $this->cursoNombre = $cursoNombre;

        return $this;
    }

    /**
     * Get cursoNombre
     *
     * @return string 
     */
    public function getCursoNombre()
    {
        return $this->cursoNombre;
    }

    /**
     * Set cursoHoras
     *
     * @param string $cursoHoras
     * @return curso
     */
    public function setCursoHoras($cursoHoras)
    {
        $this->cursoHoras = $cursoHoras;

        return $this;
    }

    /**
     * Get cursoHoras
     *
     * @return string 
     */
    public function getCursoHoras()
    {
        return $this->cursoHoras;
    }
    
    /**
     * Set cursoObjetivo
     *
     * @param string $cursoObjetivo
     * @return curso
     */
    public function setCursoObjetivo($cursoObjetivo)
    {
        $this->cursoObjetivo = $cursoObjetivo;

        return $this;
    }

    /**
     * Get cursoObjetivo
     *
     * @return string 
     */
    public function getCursoObjetivo()
    {
        return $this->cursoObjetivo;
    }
    
    //metodo magico para comvertir a texto en listas desplegables
    public function __toString()
    {
        return $this->getCursoNombre();
    }

    
//    /**
//     * Get evaluacionCursos
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getEvaluacionCursos()
//    {
//        return $this->evaluacionCursos;
//    }
                    
}
