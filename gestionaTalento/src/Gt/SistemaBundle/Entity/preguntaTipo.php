<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pregunta
 *
 * @ORM\Table(name="preguntaTipo")
 * @ORM\Entity()
 */
class preguntaTipo
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
     * @ORM\Column(name="preguntaTipoNombre", type="string", length=50)
     */
    private $preguntaTipoNombre;   
          
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
     * Set preguntaTipoNombre
     *
     * @param string $preguntaTipoNombre
     * @return pregunta
     */
    public function setPreguntaTipoNombre($preguntaTipoNombre)
    {
        $this->preguntaTipoNombre = $preguntaTipoNombre;

        return $this;
    }

    /**
     * Get preguntaTipoNombre
     *
     * @return string 
     */
    public function getPreguntaTipoNombre()
    {
        return $this->preguntaTipoNombre;
    }

    
}
