<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cursoConocimiento
 *
 * @ORM\Table(name="cursoConocimiento")
 * @ORM\Entity()
 */
class cursoConocimiento
{
    
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="curso_id", type="integer")
     */
    private $cursoId;    
    
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="conocimiento_id", type="integer")
     */
    private $conocimientoId;
    
    /**
     * Set conocimientoId
     *
     * @param string $conocimientoId
     * @return cursoConocimiento
     */
    public function setConocimientoId($conocimientoId)
    {
        $this->conocimientoId = $conocimientoId;

        return $this;
    }

    /**
     * Get conocimientoId
     *
     * @return string 
     */
    public function getConocimientoId()
    {
        return $this->conocimientoId;
    }

    
    /**
     * Set cursoId
     *
     * @param string $cursoId
     * @return cursoConocimiento
     */
    public function setCursoId($cursoId)
    {
        $this->cursoId = $cursoId;

        return $this;
    }

    /**
     * Get cursoId
     *
     * @return string 
     */
    public function getCursoId()
    {
        return $this->cursoId;
    }           
    
}
