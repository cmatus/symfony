<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class conocimientoRepository extends EntityRepository
{    
    public function getChoiceListaConocimiento($empresaId)
    {          
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT * FROM conocimiento
                WHERE empresa_id='".$empresaId."'";
//                , A.`id_empresa`
//                , A.`empresaProductoFamiliaCodigo`
//                , A.`empresaProductoFamiliaDescripcion` 
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['conocimientoNombre'];
        }   
        return $choices;
    }
             
}

?>