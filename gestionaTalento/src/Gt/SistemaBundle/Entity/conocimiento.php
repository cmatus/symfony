<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * conocimiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gt\SistemaBundle\Entity\conocimientoRepository")
 */
class conocimiento
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
     * @ORM\Column(name="conocimientoCodigo", type="string", length=10)
     */
    private $conocimientoCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="conocimientoNombre", type="string", length=50)
     */
    private $conocimientoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="conocimientoDefinicion", type="string", length=255)
     */
    private $conocimientoDefinicion;


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
     * Set conocimientoCodigo
     *
     * @param string $conocimientoCodigo
     * @return conocimiento
     */
    public function setConocimientoCodigo($conocimientoCodigo)
    {
        $this->conocimientoCodigo = $conocimientoCodigo;

        return $this;
    }

    /**
     * Get conocimientoCodigo
     *
     * @return string 
     */
    public function getConocimientoCodigo()
    {
        return $this->conocimientoCodigo;
    }
    
    /**
     * Set conocimientoNombre
     *
     * @param string $conocimientoNombre
     * @return conocimiento
     */
    public function setConocimientoNombre($conocimientoNombre)
    {
        $this->conocimientoNombre = $conocimientoNombre;

        return $this;
    }

    /**
     * Get conocimientoNombre
     *
     * @return string 
     */
    public function getConocimientoNombre()
    {
        return $this->conocimientoNombre;
    }

    /**
     * Set conocimientoDefinicion
     *
     * @param string $conocimientoDefinicion
     * @return conocimiento
     */
    public function setConocimientoDefinicion($conocimientoDefinicion)
    {
        $this->conocimientoDefinicion = $conocimientoDefinicion;

        return $this;
    }

    /**
     * Get conocimientoDefinicion
     *
     * @return string 
     */
    public function getConocimientoDefinicion()
    {
        return $this->conocimientoDefinicion;
    }
}
