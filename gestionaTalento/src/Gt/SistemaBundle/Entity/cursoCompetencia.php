<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cursoCompetencia
 *
 * @ORM\Table(name="cursoCompetencia")
 * @ORM\Entity()
 */
class cursoCompetencia
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
     * @ORM\Column(name="competencia_id", type="integer")
     */
    private $competenciaId;
    
    /**
     * Set competenciaId
     *
     * @param string $competenciaId
     * @return cursoCompetencia
     */
    public function setCompetenciaId($competenciaId)
    {
        $this->competenciaId = $competenciaId;

        return $this;
    }

    /**
     * Get competenciaId
     *
     * @return string 
     */
    public function getCompetenciaId()
    {
        return $this->competenciaId;
    }

    
    /**
     * Set cursoId
     *
     * @param string $cursoId
     * @return cursoCompetencia
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
