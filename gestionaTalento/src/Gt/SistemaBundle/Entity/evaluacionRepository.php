<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class evaluacionRepository extends EntityRepository
{    
    public function getParticipanteTabla($parametros)
    {          
        $evaluacionId=$parametros["evaluacionId"];
        $evaluadorId="";
        if (key_exists("evaluadorId", $parametros)) {
            $evaluadorId=$parametros["evaluadorId"];
        }
                
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*, 
                B.evaluacion_id,
                C.perfilNombre,
                B.id as 'participante_id',
                '0' as 'evaluacionEstado',
                CASE WHEN B.id IS NULL THEN 0 ELSE 1 END AS 'personaAsociada' 
                FROM persona A
                INNER JOIN perfil C ON A.perfil_id=C.id
                INNER JOIN participante B ON B.persona_Id=A.id AND evaluacion_id='".$evaluacionId."'";
                if ($evaluadorId!="") {
                    $sql.=" WHERE A.persona_id='".$evaluadorId."'";
                }    
        $sql.= " ORDER BY CASE WHEN B.id IS NULL THEN 0 ELSE 1 END DESC, A.personaNombre";           
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();                        
        return $stmt->fetchAll();
                        
    }
    
    public function getPersonaTabla($parametros)
    {          
        $evaluacionId=$parametros["evaluacionId"];
        $empresaId=$parametros["empresaId"];
        
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*,                 
                C.perfilNombre                
                FROM persona A
                INNER JOIN perfil C ON A.perfil_id=C.id
                LEFT JOIN participante B ON B.persona_Id=A.id AND evaluacion_id='".$evaluacionId."'
                WHERE B.persona_id IS NULL
                AND A.empresa_id='".$empresaId."'";
                                
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    public function getEvaluacionCompetenciaTabla($parametros)
    {          
        $evaluacionId=$parametros["evaluacionId"];
        $participanteId=$parametros["participanteId"];
        $perfilId=$parametros["perfilId"];
        $evaluaPreguntas=$parametros["evaluaPreguntas"];
        
        $sqlInner="LEFT";
        
        if($evaluaPreguntas=="1") {
            $sqlInner="INNER";
        } 
        //LEFT JOIN evaluacionCompetencia C ON A.competencia_id=C.competencia_id AND A.perfil_id=C.perfil_id AND C.evaluacion_id=".$evaluacionId." AND C.participante_id=".$participanteId."
        $em = $this->getEntityManager(); 
        /*$sql = "
                SELECT 
                A.competencia_id,
                competenciaNombre,                
                evaluacionCompetenciaRespuesta
                FROM perfilcompetencia A
                INNER JOIN competencia B ON A.competencia_id=B.id
                LEFT JOIN evaluacionCompetencia C ON A.competencia_id=C.competencia_id AND C.participante_id=".$participanteId."
                WHERE A.perfil_id=".$perfilId;*/
        
            $sql="SELECT
                C.id AS 'competencia_id',
                competenciaNombre,
                evaluacionCompetenciaRespuesta
                FROM participante A
                INNER JOIN perfilCompetencia B ON A.perfil_id=B.perfil_id
                INNER JOIN competencia C ON B.competencia_id=C.id
                $sqlInner JOIN evaluacionCompetencia D ON C.id=D.competencia_id AND D.participante_id=".$participanteId."
                WHERE   A.id=".$participanteId." 
                        AND A.evaluacion_id=".$evaluacionId."
                        AND A.perfil_id='".$perfilId."'";        
        
        //echo $sql;
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    public function getEvaluacionConocimientoTabla($parametros)
    {          
        $evaluacionId=$parametros["evaluacionId"];
        $participanteId=$parametros["participanteId"];
        $perfilId=$parametros["perfilId"];
        $evaluaPreguntas=$parametros["evaluaPreguntas"];
        
        $sqlInner="LEFT";
        
        if($evaluaPreguntas=="1") {
            $sqlInner="INNER";
        } 
        
        $em = $this->getEntityManager(); 
        /*$sql = "
                SELECT 
                A.conocimiento_id,
                conocimientoNombre, 
                evaluacionConocimientoRespuesta
                FROM perfilConocimiento A
                INNER JOIN conocimiento B ON A.conocimiento_id=B.id
                LEFT JOIN evaluacionConocimiento C ON A.conocimiento_id=C.conocimiento_id AND A.perfil_id=C.perfil_id AND C.evaluacion_id=".$evaluacionId." AND C.participante_id=".$participanteId."
                WHERE A.perfil_id=".$perfilId;*/
        
            $sql="SELECT
                C.id AS 'conocimiento_id',
                conocimientoNombre,
                evaluacionConocimientoRespuesta
                FROM participante A
                INNER JOIN perfilConocimiento B ON A.perfil_id=B.perfil_id
                INNER JOIN conocimiento C ON B.conocimiento_id=C.id
                $sqlInner JOIN evaluacionConocimiento D ON C.id=D.conocimiento_id AND D.participante_id=".$participanteId."
                WHERE   A.id=".$participanteId." 
                        AND A.evaluacion_id=".$evaluacionId."
                        AND A.perfil_id=".$perfilId;

        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getEvaluacionPreguntaConocimientoTabla($parametros) {
        $evaluacionId=$parametros["evaluacionId"];
        $participanteId=$parametros["participanteId"];
        $perfilId=$parametros["perfilId"];
        $conocimientoId=$parametros["conocimientoId"];
        
        $em = $this->getEntityManager();
        
        $sql=" SELECT 
        B.id AS 'evaluacionConocimiento_id',
        C.id AS 'conocimiento_id',
        conocimientoNombre, 
        E.id AS 'pregunta_id', 
        preguntaNombre,
        G.evaluacionPreguntaConocimientoRespuesta
        FROM participante A
        INNER JOIN evaluacionConocimiento B ON A.id=B.participante_id
        INNER JOIN conocimiento C ON B.conocimiento_id=C.id
        INNER JOIN preguntaConocimiento D ON B.conocimiento_id=D.conocimiento_id
        INNER JOIN pregunta E ON D.pregunta_id=E.id
        INNER JOIN preguntaClasificacion F ON E.id=F.pregunta_id AND F.clasificacion_id=B.evaluacionConocimientoRespuesta
        LEFT JOIN evaluacionPreguntaConocimiento G ON E.id=G.pregunta_id AND G.participante_id=".$participanteId." 
        WHERE A.id=".$participanteId." 
                AND A.evaluacion_id=".$evaluacionId."                  
                AND B.conocimiento_id=".$conocimientoId."";
        //echo $sql."<br>";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }

    public function getEvaluacionPreguntaCompetenciaTabla($parametros)
    {          
        $evaluacionId=$parametros["evaluacionId"];
        $participanteId=$parametros["participanteId"];
        $perfilId=$parametros["perfilId"];
        $competenciaId=$parametros["competenciaId"];
        //$clasificacionId=$parametros["clasificacionId"];
        //$preguntaTipoId=$parametros["preguntaTipoId"];
               
        $em = $this->getEntityManager(); 
        
        $sql=" SELECT 
        B.id AS 'evaluacionCompetencia_id',
        C.id AS 'competencia_id',
        competenciaNombre, 
        E.id AS 'pregunta_id',
        preguntaNombre,
        G.evaluacionPreguntaRespuesta
        FROM participante A
        INNER JOIN evaluacionCompetencia B ON A.id=B.participante_id
        INNER JOIN competencia C ON B.competencia_id=C.id
        INNER JOIN preguntaCompetencia D ON B.competencia_id=D.competencia_id
        INNER JOIN pregunta E ON D.pregunta_id=E.id
        INNER JOIN preguntaClasificacion F ON E.id=F.pregunta_id AND F.clasificacion_id=B.evaluacionCompetenciaRespuesta
        LEFT JOIN evaluacionPregunta G ON E.id=G.pregunta_id AND G.participante_id=".$participanteId." 
        WHERE A.id=".$participanteId." 
                AND A.evaluacion_id=".$evaluacionId."                  
                AND B.competencia_id=".$competenciaId."";
                    

//        $sql=" SELECT
//                C.id AS 'competencia_id',
//                competenciaNombre,
//                preguntaNombre,
//                evaluacionPreguntaRespuesta,
//                E.id AS 'pregunta_id'
//                FROM participante A
//                INNER JOIN perfilCompetencia B ON A.perfil_id=B.perfil_id
//                INNER JOIN competencia C ON B.competencia_id=C.id
//		INNER JOIN preguntaCompetencia D ON B.competencia_id=D.competencia_id                
//                INNER JOIN pregunta E ON D.pregunta_id=E.id
//                LEFT JOIN evaluacionPregunta G ON E.id=G.pregunta_id AND G.participante_id=".$participanteId."
//                WHERE   A.id=".$participanteId." 
//                        AND A.evaluacion_id=".$evaluacionId."
//                        AND A.perfil_id=".$perfilId; 
                                      
        //echo $sql."<br>";
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}
