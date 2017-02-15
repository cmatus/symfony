<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class clasificacionRepository extends EntityRepository
{    
    
   public function getChoices()
    {
        $classifications = $this->createQueryBuilder('cl')
            ->select('cl.id as id, cl.clasificacionNombre as name')
            ->getQuery()
            ->getArrayResult();
        $result = array();
        foreach($classifications as $classification) {
            $result[$classification['id']] = $classification['name'];
        }
        return $result;
    }

    
}
