<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class competenciaRepository extends EntityRepository
{    
    public function getChoiceListaCompetencia($empresaId)
    {          
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT * FROM competencia
                WHERE empresa_id=".$empresaId;
//                , A.`id_empresa`
//                , A.`empresaProductoFamiliaCodigo`
//                , A.`empresaProductoFamiliaDescripcion` 
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['competenciaNombre'];
        }   
        return $choices;
    }
             
}

?>