<?php

namespace Gt\SistemaBundle\Entity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityRepository;

class preguntaRepository extends EntityRepository
{    
    public function getListaActividadClave($parametros)
    {          
        $competenciaId=$parametros["competenciaId"];
        $preguntaId=$parametros["preguntaId"];
      
        $em = $this->getEntityManager(); 
        $sql = "
                
                SELECT A.*, 
                B.pregunta_id,
                CASE WHEN B.actividadClave_id IS NULL THEN 0 ELSE 1 END AS 'preguntaActividadClaveAsociada' 
                FROM actividadClave A
                LEFT JOIN preguntaActividadClave B ON B.actividadClave_Id=A.id AND pregunta_id='".$preguntaId."'
                WHERE A.competencia_id='".$competenciaId."'"
                . " AND  A.id NOT IN (SELECT actividadClave_id FROM preguntaActividadClave WHERE pregunta_id IN (SELECT pregunta_id FROM preguntaCompetencia WHERE competencia_id='".$competenciaId."')) ";
                
        
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

    public function getListaAprendizaje($parametros)
    {          
        $conocimientoId=$parametros["conocimientoId"];
        $preguntaId=$parametros["preguntaId"];
      
        $em = $this->getEntityManager(); 
        $sql = "
                
                SELECT A.*, 
                B.pregunta_id,
                CASE WHEN B.aprendizaje_id IS NULL THEN 0 ELSE 1 END AS 'preguntaAprendizajeAsociada' 
                FROM aprendizaje A
                LEFT JOIN preguntaAprendizaje B ON B.aprendizaje_Id=A.id AND pregunta_id='".$preguntaId."'
                WHERE A.conocimiento_id='".$conocimientoId."'
                AND  A.id NOT IN (SELECT aprendizaje_id FROM preguntaAprendizaje WHERE pregunta_id IN (SELECT pregunta_id FROM preguntaConocimiento WHERE conocimiento_id='".$conocimientoId."'))";
        
//                , A.`id_empresa`
//                , A.`empresaProductoFamiliaCodigo`
//                , A.`empresaProductoFamiliaDescripcion` 
        
        //echo $sql;
        
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
    
    
        
    public function getListaClasificacion($parametros)
    {          
        
        $empresaId=$parametros["empresaId"];
      
        $em = $this->getEntityManager(); 
        $sql = "                
            SELECT A.pregunta_id, clasificacionNombre 
            FROM preguntaClasificacion A
            INNER JOIN clasificacion B ON A.clasificacion_id=B.id
            INNER JOIN pregunta C ON A.pregunta_id=C.id
            WHERE C.empresa_id='".$empresaId."'
            ORDER BY A.pregunta_id";                        
                
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        //$stmt->execute(array(), \Doctrine\ORM\Query::HYDRATE_ARRAY);        
        $arrayData=$stmt->fetchAll();
        
        /*$response = new JsonResponse();
        $jsonData= new JsonResponse($arrayData);
        
        echo $jsonData; 
                
        return $jsonData;*/
                         
        /*$response->setData(array(
         'data' => $arrayData
        ));*/
        return $arrayData;
        
                 
    }
        
    
    
}
