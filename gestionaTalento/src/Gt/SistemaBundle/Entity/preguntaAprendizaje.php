<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pregunta
 *
 * @ORM\Table(name="preguntaAprendizaje")
 * @ORM\Entity()
 */
class preguntaAprendizaje
{
    /**
     * @var integer
     *
     * ORM\Column(name="id", type="integer")
     * ORM\Id
     * ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="pregunta_id", type="integer")
     */
    private $preguntaId;    
    
    
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="aprendizaje_id", type="integer")
     */
    private $aprendizajeId;
    
    
    /**
     * Set preguntaId
     *
     * @param string $preguntaId
     * @return pregunta
     */
    public function setPreguntaId($preguntaId)
    {
        $this->preguntaId = $preguntaId;

        return $this;
    }

    /**
     * Get preguntaId
     *
     * @return string 
     */
    public function getPreguntaId()
    {
        return $this->preguntaId;
    }
    
    
    /**
     * Set aprendizajeId
     *
     * @param string $aprendizajeId
     * @return pregunta
     */
    public function setAprendizajeId($aprendizajeId)
    {
        $this->aprendizajeId = $aprendizajeId;

        return $this;
    }

    /**
     * Get aprendizajeId
     *
     * @return string 
     */
    public function getAprendizajeId()
    {
        return $this->aprendizajeId;
    }
    
    
}
