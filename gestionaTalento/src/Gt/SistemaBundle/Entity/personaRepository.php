<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class personaRepository extends EntityRepository
{    
    
    public function getListaPersona($empresaId)
    {          
        //$empresaId=$parametros["empresaId"];
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*
                FROM persona A                
                WHERE empresa_id='".$empresaId."'
                ORDER BY A.personaNombre";                
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['personaNombre'];
        }   
        return $choices;
    }

    
}
