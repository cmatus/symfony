<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class perfilRepository extends EntityRepository
{    
    public function getListaCompetencia($parametros)
    {          
        
        $empresaId=$parametros["empresaId"];
        $perfilId=$parametros["perfilId"];
      
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*, 
                B.perfil_id,
                CASE WHEN B.id IS NULL THEN 0 ELSE 1 END AS 'perfilCompetenciaAsociada' 
                FROM competencia A
                LEFT JOIN perfilCompetencia B ON B.competencia_Id=A.id AND perfil_id='".$perfilId."'
                WHERE A.empresa_id='".$empresaId."'
                ORDER BY CASE WHEN B.id IS NULL THEN 0 ELSE 1 END DESC ";
                
        
//                , A.`id_empresa`
//                , A.`empresaProductoFamiliaCodigo`
//                , A.`empresaProductoFamiliaDescripcion` 
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        //$stmt->execute(array(), \Doctrine\ORM\Query::HYDRATE_ARRAY);        
        return $stmt->fetchAll();
        
        
//        $choices = array('' => ':: SELECCIONE ::');
//        foreach ($rows as $key => $row) {
//            $choices[$row['id']] = $row['conocimientoNombre'];
//        }   
//        return $choices;
    }

    public function getListaConocimiento($parametros)
    {          
        $empresaId=$parametros["empresaId"];
        $perfilId=$parametros["perfilId"];
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*, 
                B.perfil_id,
                CASE WHEN B.id IS NULL THEN 0 ELSE 1 END AS 'perfilConocimientoAsociada' 
                FROM conocimiento A
                LEFT JOIN perfilConocimiento B ON B.conocimiento_Id=A.id AND perfil_id='".$perfilId."' 
                WHERE A.empresa_id='".$empresaId."'
                ORDER BY CASE WHEN B.id IS NULL THEN 0 ELSE 1 END DESC";           
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

    public function getListaPerfil($empresaId)
    {          
        //$empresaId=$parametros["perfilId"];
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*
                FROM perfil A      
                WHERE empresa_id='".$empresaId."'
                ORDER BY A.perfilNombre ";           
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['perfilNombre'];
        }   
        return $choices;
    }

    
}
