<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\EvaluacionType;
use Gt\SistemaBundle\Form\EvaluacionCompetenciaType;
use Gt\SistemaBundle\Form\EvaluacionConocimientoType;
use Gt\SistemaBundle\Form\EvaluacionPreguntaType;
use Gt\SistemaBundle\Form\EvaluacionPreguntaConocimientoType;
use Gt\SistemaBundle\Entity\evaluacion;
use Gt\SistemaBundle\Entity\evaluacionCompetencia;
use Gt\SistemaBundle\Entity\evaluacionPregunta;

use Gt\SistemaBundle\Entity\evaluacionConocimiento;
use Gt\SistemaBundle\Entity\evaluacionPreguntaConocimiento;

use Gt\SistemaBundle\Entity\evaluacionActividadClave;
use Gt\SistemaBundle\Entity\evaluacionCriterio;
use Gt\SistemaBundle\Entity\evaluacionAprendizaje;


use Gt\SistemaBundle\Form\EvaluacionActividadClaveType;


class EvaluacionController extends Controller
{
    
    public function evaluacionAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:evaluacion.html.twig', $param);        
    }
    
    public function evaluacionRegistrarAction($evaluacionId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        
        if ($evaluacionId=="0") {
            $evaluacionEntity=new evaluacion();   
        } else {
            $evaluacionEntity=$em->getRepository('GtSistemaBundle:evaluacion')->find($evaluacionId);
        }
        $form = $this->createForm(new EvaluacionType($em), $evaluacionEntity);
        
        if ($request->getMethod() == 'POST') {            
            
            $form->bind($request);
            if ($form->isValid()) {
                $evaluacionEntity->setEmpresaId($empresaId);
                $em->persist($evaluacionEntity);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }                    
        }
                 
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:evaluacionRegistrar.html.twig', $param);        
    }
    
    public function evaluacionBorrarAction($evaluacionId)
    {
        //echo "id:".$evaluacionId."<br>";
        $em = $this->getDoctrine()->getManager();
        $evaluacionEntity=$em->getRepository('GtSistemaBundle:evaluacion')->find($evaluacionId);
        $em->remove($evaluacionEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $evaluacionEntity=new evaluacion();   
        $form = $this->createForm(new EvaluacionType($em), $evaluacionEntity);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:evaluacion.html.twig', $param);
    }
    
   
                  
    public function evaluacionTablaAction()
    {           
       
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:evaluacion ', 'a')
            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
        
    }
    
        
    public function ParticipantesTablaAction($competenciaId, $preguntaId)
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$competenciaId="2";
        //$arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy(array("idEmpresa"=>"1"));        
        //$arrayData = $em->getRepository('GtSistemaBundle:actividadClave')->findBy(array("competenciaId"=>$competenciaId));
//        echo "<pre>";
//        print_r($arrayData);
//        echo "</pre>";
        //$preguntaId="7";
        $response = new JsonResponse();
        
        $parametros=array(  "competenciaId"=>$competenciaId,
                            "preguntaId"=>$preguntaId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:pregunta')->getListaActividadClave($parametros);
        
//        $arrayData = $this->getDoctrine()
//            ->getRepository('GtSistemaBundle:actividadClave')
//            ->createQueryBuilder('c')
//            ->select('c')
//            //->innerJoin('FELSistemaBundle:dte', 'b', 'WITH', 'b.id = a.idDte')     
//            ->where('c.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId)
//            ->getQuery()
//            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
//         ;
 
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    
    public function personaTablaAction($evaluacionId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $response = new JsonResponse();
        $parametros=array("evaluacionId"=>$evaluacionId, "empresaId"=>$empresaId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:evaluacion')->getPersonaTabla($parametros);
        
        return new JsonResponse($arrayData);
    }
    
        
    public function evaluacionParticipantesAction($evaluacionId)
    {        
        $param['evaluacionId'] = $evaluacionId;
        return $this->render('GtSistemaBundle:Evaluacion:participantes.html.twig', $param);                
    } 
    
    public function evaluacionParticipantesTabla1Action($evaluacionId)
    {                   
        $em = $this->getDoctrine()->getManager();      
        $request = $this->getRequest();
        $session = $request->getSession();        
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $usuarioTipoId = $session->get("usuarioTipoId");
        
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
        
        
        //echo $user;
        //$arrBusca=array("empresaId"=>$empresaId);
        //$arrayData = $em->getRepository('GtSistemaBundle:participante')->findBy($arrBusca);
        $response = new JsonResponse();
        
        $arrBuscaPersona=array("personaCorreo"=>$user->getUserName());        
//        echo "<pre>";
//        echo print_r($arrBuscaPersona);
//        echo "</pre>";
        
        $personaEntity=$em->getRepository('GtSistemaBundle:persona')->findOneBy($arrBuscaPersona);
        $evaluadorId=$personaEntity->getId();
        
        $parametros=array("evaluacionId"=>$evaluacionId, "evaluadorId"=>$evaluadorId);        
        $arrayData=$em->getRepository('GtSistemaBundle:evaluacion')->getParticipanteTabla($parametros);
        
        $i=0;
        foreach ($arrayData as $row) {                    
            $perfilId=$row["perfil_id"];                        
            $participanteId=$row["participante_id"];
                    
            $arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
            $perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);

            $preguntaCompetenciaCantidad=0;
            $evaluacionPreguntaCompetenciaCantidad=0;
            foreach ($perfilCompetenciaEntity as $rowPerfilCompetencia) {
                $arrBuscaPreguntaCompetencia=array("competenciaId"=>$rowPerfilCompetencia->getCompetenciaId());
                $preguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:preguntaCompetencia')->findBy($arrBuscaPreguntaCompetencia);    
                $preguntaCompetenciaCantidad=$preguntaCompetenciaCantidad+count($preguntaCompetenciaEntity);
            }
            
            $arrBuscaEvaluacionPreguntaCompetencia=array("participanteId"=>$participanteId);
            $evaluacionPreguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionPregunta')->findBy($arrBuscaEvaluacionPreguntaCompetencia);    
            $evaluacionPreguntaCompetenciaCantidad=$evaluacionPreguntaCompetenciaCantidad+count($evaluacionPreguntaCompetenciaEntity);
                        
            $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
            $perfilConocimientoEntity=$em->getRepository('GtSistemaBundle:perfilConocimiento')->findBy($arrBuscaPerfilConocimiento);

            $preguntaConocimientoCantidad=0;
            $evaluacionPreguntaConocimientoCantidad=0;
            foreach ($perfilConocimientoEntity as $rowPerfilConocimiento) {
                $arrBuscaPreguntaConocimiento=array("conocimientoId"=>$rowPerfilConocimiento->getConocimientoId());
                $preguntaConocimientoEntity=$em->getRepository('GtSistemaBundle:preguntaConocimiento')->findBy($arrBuscaPreguntaConocimiento);    
                $preguntaConocimientoCantidad=$preguntaConocimientoCantidad+count($preguntaConocimientoEntity);
            }    
            $arrBuscaEvaluacionPreguntaConocimiento=array("participanteId"=>$participanteId);
            $evaluacionPreguntaConocimientoEntity=$em->getRepository('GtSistemaBundle:evaluacionPreguntaConocimiento')->findBy($arrBuscaEvaluacionPreguntaConocimiento);    
            $evaluacionPreguntaConocimientoCantidad=$evaluacionPreguntaConocimientoCantidad+count($evaluacionPreguntaConocimientoEntity);

            $preguntasTotal=$preguntaCompetenciaCantidad+$preguntaConocimientoCantidad;
            $evaluacionPreguntasTotal=$evaluacionPreguntaCompetenciaCantidad+$evaluacionPreguntaConocimientoCantidad;
            $evaluacionAvance=round(($evaluacionPreguntasTotal/$preguntasTotal)*100);
            
            $row["evaluacionEstado"]=$evaluacionAvance;
            $arrayData[$i]["evaluacionEstado"]=$evaluacionAvance;
            $i++;
//            echo "<br><br>perfil: ".$perfilId."<br>";
//            echo "<br><br>participante: ".$participanteId."<br>";
//            echo "<br><br>cantidad Pregunta Com: ".$preguntaCompetenciaCantidad."<br>";
//            echo "<br><br>cantidad Respuesta Com: ".$evaluacionPreguntaCompetenciaCantidad."<br>";
//            echo "<br><br>cantidad Pregunta Cono: ".$preguntaConocimientoCantidad."<br>";
//            echo "<br><br>cantidad Respuesta Cono: ".$evaluacionPreguntaConocimientoCantidad."<br>";
//
//            echo "<br><br>cantidad Pregunta: ".$preguntasTotal."<br>";
//            echo "<br><br>cantidad Respuesta: ".$evaluacionPreguntasTotal."<br>";                                   
        }
        
        //exit();
        //$perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
        
        //$preguntaConocimientoCantidad=
        //$preguntaCompetenciaCantidad=
                
        
        //$evaluacionPreguntaConocimientoCantidad=     
                
//        $query = $em->createQueryBuilder()
//                        ->select("a.competenciaId, c.competenciaNombre, b.evaluacionCompetenciaRespuesta")
//                        ->from('GtSistemaBundle:perfilCompetencia', 'a')
//                        ->innerJoin('GtSistemaBundle:preguntaCompetencia', 'c', 'WITH', 'a.competenciaId = c.competenciaId')
//                        //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'a.competenciaId = c.id')
//                        ->leftJoin('GtSistemaBundle:evaluacionCompetencia', 'b', 'WITH', 'a.competenciaId = b.competenciaId AND b.participanteId='. $participanteId)
//                        ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
        
        
        return new JsonResponse($arrayData);
        
//        $response->setData(array(
//         'data' => $arrayData
//        ));
//
//        return $response;                

    }
    
    
    public function evaluacionParticipantesTablaAction($evaluacionId)
    {                   
        $em = $this->getDoctrine()->getManager();      
        $request = $this->getRequest();
        $session = $request->getSession();        
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $usuarioTipoId = $session->get("usuarioTipoId");
                
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
                
        $response = new JsonResponse();
        
        $arrBuscaPersona=array("personaCorreo"=>$user->getUserName());        
        
        $personaEntity=$em->getRepository('GtSistemaBundle:persona')->findOneBy($arrBuscaPersona);
        $evaluadorId=$personaEntity->getId();
        
        $parametros=array("evaluacionId"=>$evaluacionId, "evaluadorId"=>$evaluadorId);        
        $arrayData=$em->getRepository('GtSistemaBundle:evaluacion')->getParticipanteTabla($parametros);
        
        $i=0;
        foreach ($arrayData as $row) {                    
            $perfilId=$row["perfil_id"];                        
            $participanteId=$row["participante_id"];
                    
            //$arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
            //$perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);

            $query = $em->createQueryBuilder()
            ->select("c.id as actividadClaveId, c.actividadClaveNombre, d.evaluacionActividadClaveRespuesta")
            ->from('GtSistemaBundle:perfilCompetencia', 'a')
            ->innerJoin('GtSistemaBundle:competencia', 'b', 'WITH', 'a.competenciaId = b.id')
            ->innerJoin('GtSistemaBundle:actividadClave', 'c', 'WITH', 'c.competenciaId = b.id')
            ->leftJoin('GtSistemaBundle:evaluacionActividadClave', 'd', 'WITH', 'd.actividadClaveId = c.id AND d.participanteId='. $participanteId)
            ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
                  
            $actividadClaveData=$query->getQuery()->getArrayResult();
               
            $criterioCantidad=0;
            $evaluacionCriterioCantidad=0;
            foreach ($actividadClaveData as $rowActividadClave) {
                $arrBuscaCriterio=array("actividadClaveId"=>$rowActividadClave["actividadClaveId"]);
                $criterioEntity=$em->getRepository('GtSistemaBundle:criterio')->findBy($arrBuscaCriterio);    
                $criterioCantidad=$criterioCantidad+count($criterioEntity);
            }
            
            $arrBuscaEvaluacionCriterio=array("participanteId"=>$participanteId);
            $evaluacionCriterioEntity=$em->getRepository('GtSistemaBundle:evaluacionCriterio')->findBy($arrBuscaEvaluacionCriterio);    
            $evaluacionCriterioCantidad=$evaluacionCriterioCantidad+count($evaluacionCriterioEntity);
                        
            $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
            $perfilConocimientoEntity=$em->getRepository('GtSistemaBundle:perfilConocimiento')->findBy($arrBuscaPerfilConocimiento);

            $aprendizajeCantidad=0;
            $evaluacionAprendizajeCantidad=0;
            foreach ($perfilConocimientoEntity as $rowPerfilConocimiento) {
                $arrBuscaAprendizaje=array("conocimientoId"=>$rowPerfilConocimiento->getConocimientoId());
                $aprendizajeEntity=$em->getRepository('GtSistemaBundle:aprendizaje')->findBy($arrBuscaAprendizaje);    
                $aprendizajeCantidad=$aprendizajeCantidad+count($aprendizajeEntity);
            }    
            $arrBuscaEvaluacionAprendizaje=array("participanteId"=>$participanteId);
            $evaluacionAprendizajeEntity=$em->getRepository('GtSistemaBundle:evaluacionAprendizaje')->findBy($arrBuscaEvaluacionAprendizaje);    
            $evaluacionAprendizajeCantidad=$evaluacionAprendizajeCantidad+count($evaluacionAprendizajeEntity);

            $preguntasTotal=$criterioCantidad+$aprendizajeCantidad;
            $evaluacionPreguntasTotal=$evaluacionCriterioCantidad+$evaluacionAprendizajeCantidad;
            $evaluacionAvance=round(($evaluacionPreguntasTotal/$preguntasTotal)*100);
            
            $row["evaluacionEstado"]=$evaluacionAvance;
            $arrayData[$i]["evaluacionEstado"]=$evaluacionAvance;
            $i++;
                                   
        }
                         
        return new JsonResponse($arrayData);
    }
    
    
//    public function evaluacionPreguntaCompetenciatestAction($participanteId)
//    {
//        
//         $em = $this->getDoctrine()->getManager();        
//        $request = $this->getRequest();
//        $session = $request->getSession();
//        $empresaId = $session->get("empresaId");
//        $usuarioId = $session->get("usuarioId");
//        $preguntaTipoId="1";
//         $competenciaId=$request->get("competenciaId");
//        $competenciaNumero=$request->get("competenciaNumero");
//                
//        if ($competenciaNumero=="") {
//            $competenciaNumero=1;
//        }
//                
//        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
//        
//        $arrBuscaPerfilCompetencia=array("perfilId"=>$participanteEntity->getPerfilId());
//        $perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
//        $competenciaTotal=count($perfilCompetenciaEntity);
//        $evaluacionFinalizo=false;
//        if ($competenciaNumero>$competenciaTotal) { //esto quiere decir que termino de evaluar y se finalizo
//            $evaluacionFinalizo=true;
//            $competenciaNumero--;
//        }
//        echo "competencia Numero: ".$competenciaNumero;
//        $i=0;
//        if ($competenciaId=="") {
//            foreach ($perfilCompetenciaEntity as $row) {
//                $i++;
//                if ($i==$competenciaNumero) {
//                    $competenciaId=$row->getCompetenciaId();
//                }
//            }            
//        }
//        
//           $query = $em->createQueryBuilder()
//                        ->select("b.personaNombre, c.perfilNombre")
//                        ->from('GtSistemaBundle:participante', 'a')
//                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
//                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
//                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
//                        
//         
//        $arrayData=$query->getQuery()->getArrayResult();
//        foreach ($arrayData  as $row) {
//            $personaNombre=$row["personaNombre"];
//            $perfilNombre=$row["perfilNombre"];
//        }
//         
//        $competenciaEntity=$em->getRepository('GtSistemaBundle:competencia')->find($competenciaId);
//        
//        $competenciaNombre=$competenciaEntity->getCompetenciaNombre();
//        $competenciaDefinincion=$competenciaEntity->getCompetenciaDefinicion();        
//                
//        $arrBuscaPreguntaCompetencia=array("competenciaId"=>$competenciaId);        
//        $preguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:preguntaCompetencia')->findBy($arrBuscaPreguntaCompetencia);
//        
//        
//        $arrBuscaEvaluacionCompetencia=array("participanteId"=>$participanteId, "competenciaId"=>$competenciaId);                      
//        $evaluacionCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionCompetencia')->findOneBy($arrBuscaEvaluacionCompetencia);
//        //$evaluacionCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionCompetencia')->find(140);
//        
//        if (count($evaluacionCompetenciaEntity)==0) {
//            $evaluacionCompetenciaEntity=new evaluacionCompetencia();
//            $evaluacionCompetenciaEntity->setCompetenciaId($competenciaId);
//            $evaluacionCompetenciaEntity->setParticipanteId($participanteId);
//
//            $i=0;
//            foreach ($preguntaCompetenciaEntity as $row) {
//                $i++;
//                $preguntaId=$row->getId();                
//                $evaluacionPregunta{$i} = new evaluacionPregunta();
//                $evaluacionPregunta{$i}->setEvaluacionCompetencia($evaluacionCompetenciaEntity);             
//                $evaluacionPregunta{$i}->setPreguntaId($preguntaId);
//                $evaluacionPregunta{$i}->setParticipanteId($participanteId);                
//                $evaluacionCompetenciaEntity->getEvaluacionPreguntas()->add($evaluacionPregunta{$i});
//            } 
//            
//        }
// 
//        
//        $form = $this->createForm(new EvaluacionCompetenciaType("2", $preguntaTipoId), $evaluacionCompetenciaEntity);
//        
//         $post=false;
//        if ( $request->getMethod() == 'POST' ) {
//            $post=true;
//            
//            $preguntaTipoId="1";  //pregutnas del tipo conocimiento
//            $form->bind($request);
//            
//            if ($form->isValid()) {  
//                
//                                     
//                
//                $this->get('session')->getFlashBag()->add('notice', 'Datos grabados con exito!' );
//                
//                $em->persist($evaluacionCompetenciaEntity);
//                $em->flush();       
//                                
//                
//            }
//        }
//            
//        //if (!$post) {
//        $param['form'] = $form->createView();
//        $param['participanteId'] = $participanteId;            
//        $param['competenciaTotal']=count($perfilCompetenciaEntity);
//        $param['competenciaNumero']=$competenciaNumero;
//        $param['competenciaId']=$competenciaId;
//        $param['competenciaNombre'] = $competenciaNombre;
//        $param['competenciaDefinicion'] = $competenciaDefinincion;
//        $param['perfilCompetenciaEntity']=$perfilCompetenciaEntity;
//        $param['preguntaCompetenciaEntity']=$preguntaCompetenciaEntity;
//        $param['personaNombre']=$personaNombre;
//        $param['perfilNombre']=$perfilNombre;
//
//        return $this->render('GtSistemaBundle:Evaluacion:evaCompetencia.html.twig', $param); 
//            
//            
//    }   
    
    public function evaluacionPreguntaCompetenciaAction($participanteId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $preguntaTipoId="1";
        $competenciaId=$request->get("competenciaId");
        $competenciaNumero=$request->get("competenciaNumero");
                
        if ($competenciaNumero=="") {
            $competenciaNumero=1;
        }
                
        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        
        $arrBuscaPerfilCompetencia=array("perfilId"=>$participanteEntity->getPerfilId());
        $perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
        $competenciaTotal=count($perfilCompetenciaEntity);
        
        
        $i=0;
        
            foreach ($perfilCompetenciaEntity as $row) {
                $i++;
                if ($i==$competenciaNumero) {
                    $competenciaId=$row->getCompetenciaId();
                }
            }            
        
        $query = $em->createQueryBuilder()
                        ->select("b.personaNombre, c.perfilNombre")
                        ->from('GtSistemaBundle:participante', 'a')
                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
                        
         
        $arrayData=$query->getQuery()->getArrayResult();
        foreach ($arrayData  as $row) {
            $personaNombre=$row["personaNombre"];
            $perfilNombre=$row["perfilNombre"];
        }
       
        //echo "competencia Numero: ".$competenciaNumero;
        
        $competenciaEntity=$em->getRepository('GtSistemaBundle:competencia')->find($competenciaId);
        
        $competenciaNombre=$competenciaEntity->getCompetenciaNombre();
        $competenciaDefinincion=$competenciaEntity->getCompetenciaDefinicion();        
                
        $arrBuscaPreguntaCompetencia=array("competenciaId"=>$competenciaId);        
        $preguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:preguntaCompetencia')->findBy($arrBuscaPreguntaCompetencia);
                
        $arrBuscaEvaluacionCompetencia=array("participanteId"=>$participanteId, "competenciaId"=>$competenciaId);                      
        $evaluacionCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionCompetencia')->findOneBy($arrBuscaEvaluacionCompetencia);
        
        if (count($evaluacionCompetenciaEntity)==0) {
            $evaluacionCompetenciaEntity=new evaluacionCompetencia();
            $evaluacionCompetenciaEntity->setCompetenciaId($competenciaId);
            $evaluacionCompetenciaEntity->setParticipanteId($participanteId);

            $i=0;
            foreach ($preguntaCompetenciaEntity as $row) {
                $i++;
                $preguntaId=$row->getId();                
                $evaluacionPregunta{$i} = new evaluacionPregunta();
                $evaluacionPregunta{$i}->setEvaluacionCompetencia($evaluacionCompetenciaEntity);             
                $evaluacionPregunta{$i}->setPreguntaId($preguntaId);
                $evaluacionPregunta{$i}->setParticipanteId($participanteId);                
                $evaluacionCompetenciaEntity->getEvaluacionPreguntas()->add($evaluacionPregunta{$i});
            } 
        }
        
        $form = $this->createForm(new EvaluacionCompetenciaType("2", $preguntaTipoId), $evaluacionCompetenciaEntity);
        
        
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            
            $preguntaTipoId="1";  //pregutnas del tipo conocimiento
            $form->bind($request);
            
            if ($form->isValid()) {  
                                     
                $this->get('session')->getFlashBag()->add('notice', 'Datos grabados con exito!' );
                
                $em->persist($evaluacionCompetenciaEntity);
                $em->flush();       
                                
                $arrEvaluacionPreguntas=$evaluacionCompetenciaEntity->getEvaluacionPreguntas(); 
                $evaluacionCompetenciaPromedio=0;
                $contPromedio=0;
                foreach ($arrEvaluacionPreguntas as $row) {
                    $evaluacionPreguntaRespuesta=$row->getEvaluacionPreguntaRespuesta();
                    if ($evaluacionPreguntaRespuesta>0) {
                        $contPromedio++;
                        $evaluacionCompetenciaPromedio=$evaluacionPreguntaRespuesta+$evaluacionCompetenciaPromedio;                    
                    }
                }
                $evaluacionCompetenciaRespuesta=$evaluacionCompetenciaPromedio/$contPromedio;
                $evaluacionCompetenciaEntity->setEvaluacionCompetenciaRespuesta($evaluacionCompetenciaRespuesta);
                $em->persist($evaluacionCompetenciaEntity);
                $em->flush();                
                                              
                //$form = $this->createForm(new EvaluacionCompetenciaType("2", $preguntaTipoId), $evaluacionCompetenciaEntity);
                $param["participanteId"]=$participanteId;
                $param["competenciaId"]=$competenciaId;
                $competenciaNumero++;
                          
                $evaluacionFinalizo=false;
                if ($competenciaNumero>$competenciaTotal) { //esto quiere decir que termino de evaluar y se finalizo
                    $evaluacionFinalizo=true;                    
                }
                        
                $param["competenciaNumero"]=$competenciaNumero;
                                
                //exit();
                if (!$evaluacionFinalizo) {
                    return $this->redirect($this->generateUrl('evaluacionPreguntaCompetencia',$param));
                } else {
                    return $this->redirect($this->generateUrl('evaluacionPreguntaCompetenciaResumen',$param));
                }
                
            }
        }
            
        //if (!$post) {
            $param['form'] = $form->createView();            
            $param['participanteId'] = $participanteId;            
            $param['competenciaTotal']=count($perfilCompetenciaEntity);
            $param['competenciaNumero']=$competenciaNumero;
            $param['competenciaId']=$competenciaId;
            $param['competenciaNombre'] = $competenciaNombre;
            $param['competenciaDefinicion'] = $competenciaDefinincion;
            $param['perfilCompetenciaEntity']=$perfilCompetenciaEntity;
            $param['preguntaCompetenciaEntity']=$preguntaCompetenciaEntity;
            $param['personaNombre']=$personaNombre;
            $param['perfilNombre']=$perfilNombre;
                                
            return $this->render('GtSistemaBundle:Evaluacion:preguntaCompetencia.html.twig', $param); 
        
    }
    
    public function evaluacionPreguntaCompetenciaResumenAction($participanteId)
    {                   
        $em = $this->getDoctrine()->getManager(); 
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        $perfilId=$participanteEntity->getPerfilId();
                
        $arrBuscaPerfilCompetencia=array("perfilId"=>$participanteEntity->getPerfilId());
        //$perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
        
        $query = $em->createQueryBuilder()
                        ->select("b.personaNombre, c.perfilNombre")
                        ->from('GtSistemaBundle:participante', 'a')
                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
                        
         
        $arrayData=$query->getQuery()->getArrayResult();
        foreach ($arrayData  as $row) {
            $personaNombre=$row["personaNombre"];
            $perfilNombre=$row["perfilNombre"];
        }

                $query = $em->createQueryBuilder()
                        ->select("a.competenciaId, c.competenciaNombre, b.evaluacionCompetenciaRespuesta")
                        ->from('GtSistemaBundle:perfilCompetencia', 'a')
                        ->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'a.competenciaId = c.id')
                        ->leftJoin('GtSistemaBundle:evaluacionCompetencia', 'b', 'WITH', 'a.competenciaId = b.competenciaId AND b.participanteId='. $participanteId)
                        ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
                        //->andWhere('b.participanteId = :participanteId')->setParameter('participanteId', $participanteId);

        $arrayData=$query->getQuery()->getArrayResult();
        
        $param['perfilCompetenciaEntity']=$arrayData;
        $param['participanteId']=$participanteId;
        $param['personaNombre']=$personaNombre;
        $param['perfilNombre']=$perfilNombre;

        return $this->render('GtSistemaBundle:Evaluacion:preguntaCompetenciaResumen.html.twig', $param); 
    }


    public function evaluacionUclResumenAction($participanteId)
    {                   
        $em = $this->getDoctrine()->getManager(); 
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        $perfilId=$participanteEntity->getPerfilId();
                
        $arrBuscaPerfilCompetencia=array("perfilId"=>$participanteEntity->getPerfilId());
        //$perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
        
        $query = $em->createQueryBuilder()
                        ->select("b.personaNombre, c.perfilNombre")
                        ->from('GtSistemaBundle:participante', 'a')
                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
                        
         
        $arrayData=$query->getQuery()->getArrayResult();
        foreach ($arrayData  as $row) {
            $personaNombre=$row["personaNombre"];
            $perfilNombre=$row["perfilNombre"];
        }

        $query = $em->createQueryBuilder()
        ->select("c.id as actividadClaveId, c.actividadClaveNombre, d.evaluacionActividadClaveRespuesta")
        ->from('GtSistemaBundle:perfilCompetencia', 'a')
        ->innerJoin('GtSistemaBundle:competencia', 'b', 'WITH', 'a.competenciaId = b.id')
        ->innerJoin('GtSistemaBundle:actividadClave', 'c', 'WITH', 'c.competenciaId = b.id')
        ->leftJoin('GtSistemaBundle:evaluacionActividadClave', 'd', 'WITH', 'd.actividadClaveId = c.id AND d.participanteId='. $participanteId)
        ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
                        //->andWhere('b.participanteId = :participanteId')->setParameter('participanteId', $participanteId);
                
                       /*select c.id, c.actividadClaveNombre, d.evaluacionActividadClaveRespuesta 
                        from perfilCompetencia a 
                        inner join competencia b on a.competencia_id=b.id 
                        inner join actividadClave c on b.id=c.competencia_id 
                        inner join evaluacionActividadClave d on c.id=d.actividadClave_id 
                        where a.perfil_id=1*/
                        
        $arrayData=$query->getQuery()->getArrayResult();
        
        $param['actividadClaveEntity']=$arrayData;
        $param['participanteId']=$participanteId;
        $param['personaNombre']=$personaNombre;
        $param['perfilNombre']=$perfilNombre;

        return $this->render('GtSistemaBundle:Evaluacion:evaUclResumen.html.twig', $param); 
    }
    
    
    public function evaluacionCriterioAction($participanteId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $preguntaTipoId="1";
        $actividadClaveId=$request->get("actividadClaveId");
        $actividadClaveNumero=$request->get("actividadClaveNumero");
                
        if ($actividadClaveNumero=="") {
            $actividadClaveNumero=1;
        }
                
        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        $perfilId=$participanteEntity->getPerfilId();
        
        $query = $em->createQueryBuilder()
            ->select("b.id,"
                    ."b.actividadClaveNombre")
            ->from('GtSistemaBundle:perfilCompetencia ', 'a')
            ->innerJoin('GtSistemaBundle:actividadClave', 'b', 'WITH', 'b.competenciaId = a.competenciaId')                 
            ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);                       
        $actividadClaveData=$query->getQuery()->getArrayResult();
        
        $actividadClaveTotal=count($actividadClaveData);
        
        $i=0;        
        foreach ($actividadClaveData as $row) {
            $i++;
            if ($i==$actividadClaveNumero) {
                $actividadClaveId=$row["id"];
            }
        }
        
        
 //       $arrBuscaPerfilCompetencia=array("perfilId"=>$participanteEntity->getPerfilId());
//        $perfilCompetenciaEntity=$em->getRepository('GtSistemaBundle:perfilCompetencia')->findBy($arrBuscaPerfilCompetencia);
//        $actividadClaveTotal=count($perfilCompetenciaEntity);
//        
//        
//        $i=0;
//        
//            foreach ($perfilCompetenciaEntity as $row) {
//                $i++;
//                if ($i==$actividadClaveNumero) {
//                    $competenciaId=$row->getCompetenciaId();
//                }
//            }            
        
        $query = $em->createQueryBuilder()
                        ->select("b.personaNombre, c.perfilNombre")
                        ->from('GtSistemaBundle:participante', 'a')
                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
                        
         
        $arrayData=$query->getQuery()->getArrayResult();
        foreach ($arrayData  as $row) {
            $personaNombre=$row["personaNombre"];
            $perfilNombre=$row["perfilNombre"];
        }
       
        //echo "competencia Numero: ".$competenciaNumero;
        
        $actividadClaveEntity=$em->getRepository('GtSistemaBundle:actividadClave')->find($actividadClaveId);
//        
        $actividadClaveNombre=$actividadClaveEntity->getActividadClaveNombre();
        
                
        $arrBuscaCriterio=array("actividadClaveId"=>$actividadClaveId);        
        $criterioEntity=$em->getRepository('GtSistemaBundle:criterio')->findBy($arrBuscaCriterio);
                
        $arrBuscaEvaluacionActividadClave=array("participanteId"=>$participanteId, "actividadClaveId"=>$actividadClaveId);
        $evaluacionActividadClaveEntity=$em->getRepository('GtSistemaBundle:evaluacionActividadClave')->findOneBy($arrBuscaEvaluacionActividadClave);
        
        if (count($evaluacionActividadClaveEntity)==0) {
            $evaluacionActividadClaveEntity=new evaluacionActividadClave();
            $evaluacionActividadClaveEntity->setActividadClaveId($actividadClaveId);
            $evaluacionActividadClaveEntity->setParticipanteId($participanteId);

            $i=0;
            foreach ($criterioEntity as $row) {
                $i++;
                $criterioId=$row->getId();                
                $evaluacionCriterio{$i} = new evaluacionCriterio();
                $evaluacionCriterio{$i}->setEvaluacionActividadClave($evaluacionActividadClaveEntity);             
                $evaluacionCriterio{$i}->setCriterioId($criterioId);
                $evaluacionCriterio{$i}->setParticipanteId($participanteId);                
                $evaluacionActividadClaveEntity->getEvaluacionCriterios()->add($evaluacionCriterio{$i});
            } 
        }
        
        $form = $this->createForm(new EvaluacionActividadClaveType(), $evaluacionActividadClaveEntity);
        
        
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            
            //$preguntaTipoId="1";  //pregutnas del tipo conocimiento
            $form->bind($request);
            
            if ($form->isValid()) {  
                                     
                //
                
                $em->persist($evaluacionActividadClaveEntity);
                $em->flush();       
                
                               
                $arrEvaluacionCriterios=$evaluacionActividadClaveEntity->getEvaluacionCriterios(); 
                $evaluacionActividadClavePromedio=0;
                $contPromedio=0;
                foreach ($arrEvaluacionCriterios as $row) {
                    $evaluacionCriterioRespuesta=$row->getEvaluacionCriterioRespuesta();
                    if ($evaluacionCriterioRespuesta>0) {
                        $contPromedio++;
                        $evaluacionActividadClavePromedio=$evaluacionCriterioRespuesta+$evaluacionActividadClavePromedio;                    
                    }
                }
                $evaluacionActividadClaveRespuesta=$evaluacionActividadClavePromedio/$contPromedio;
                $evaluacionActividadClaveEntity->setEvaluacionActividadClaveRespuesta($evaluacionActividadClaveRespuesta);
                $em->persist($evaluacionActividadClaveEntity);
                $em->flush();                
                                              
                //$form = $this->createForm(new EvaluacionCompetenciaType("2", $preguntaTipoId), $evaluacionCompetenciaEntity);
                $param["participanteId"]=$participanteId;
                $param["actividadClaveId"]=$actividadClaveId;
                $actividadClaveNumero++;
                          
                $evaluacionFinalizo=false;
                if ($actividadClaveNumero>$actividadClaveTotal) { //esto quiere decir que termino de evaluar y se finalizo
                    $evaluacionFinalizo=true;                    
                }
                        
                $param["actividadClaveNumero"]=$actividadClaveNumero;

                $this->get('session')->getFlashBag()->add('notice', 'Datos grabados con exito!' );
                
                //exit();
                if (!$evaluacionFinalizo) {
                    return $this->redirect($this->generateUrl('evaluacionCriterio',$param));
                } else {
                    return $this->redirect($this->generateUrl('evaluacionUclResumen',$param));
                }
                
            }
        }
            
        //if (!$post) {
            $param['form'] = $form->createView();            
            $param['participanteId'] = $participanteId;            
            $param['actividadClaveTotal']=$actividadClaveTotal;
            $param['actividadClaveNumero']=$actividadClaveNumero;
            $param['actividadClaveId']=$actividadClaveId;
            //$param['competenciaNombre'] = $competenciaNombre;
          //  $param['actvididadClaveId'] = $actividadClaveId;            
            $param['actividadClaveNombre'] = $actividadClaveNombre;
            //$param['perfilCompetenciaEntity']=$perfilCompetenciaEntity;
            $param['actividadClaveData']=$actividadClaveData;
            $param['criterioEntity']=$criterioEntity;
            $param['personaNombre']=$personaNombre;
            $param['perfilNombre']=$perfilNombre;
                                
            return $this->render('GtSistemaBundle:Evaluacion:evaCriterio.html.twig', $param); 
        
    }
    
    public function evaluacionAprendizajeAction($participanteId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $preguntaTipoId="1";
        $conocimientoId=$request->get("conocimientoId");
        $conocimientoNumero=$request->get("conocimientoNumero");
                
        if ($conocimientoNumero=="") {
            $conocimientoNumero=1;
        }
                
        $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        $perfilId=$participanteEntity->getPerfilId();
        
        $query = $em->createQueryBuilder()
            ->select("b.id as conocimientoId,"
                    ."b.conocimientoNombre,"
                    ."b.conocimientoDefinicion")
            ->from('GtSistemaBundle:perfilConocimiento ', 'a')
            ->innerJoin('GtSistemaBundle:conocimiento', 'b', 'WITH', 'b.id = a.conocimientoId')                 
            ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);                       
        $conocimientoData=$query->getQuery()->getArrayResult();
        
        $conocimientoTotal=count($conocimientoData);
        
        $i=0;        
        foreach ($conocimientoData as $row) {
            $i++;
            if ($i==$conocimientoNumero) {
                $conocimientoId=$row["conocimientoId"];
                $conocimientoDefinicion=$row["conocimientoDefinicion"];
            }
        }                 
        
        $query = $em->createQueryBuilder()
                        ->select("b.personaNombre, c.perfilNombre")
                        ->from('GtSistemaBundle:participante', 'a')
                        ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                        ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                        ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);
                        
         
        $arrayData=$query->getQuery()->getArrayResult();
        foreach ($arrayData  as $row) {
            $personaNombre=$row["personaNombre"];
            $perfilNombre=$row["perfilNombre"];
        }
       
        //echo "competencia Numero: ".$competenciaNumero;
        
        $conocimientoEntity=$em->getRepository('GtSistemaBundle:conocimiento')->find($conocimientoId);
//        
        $conocimientoNombre=$conocimientoEntity->getConocimientoNombre();
        
                
        $arrBuscaAprendizaje=array("conocimientoId"=>$conocimientoId);        
        $aprendizajeEntity=$em->getRepository('GtSistemaBundle:aprendizaje')->findBy($arrBuscaAprendizaje);
                
        $arrBuscaEvaluacionConocimiento=array("participanteId"=>$participanteId, "conocimientoId"=>$conocimientoId);
        $evaluacionConocimientoEntity=$em->getRepository('GtSistemaBundle:evaluacionConocimiento')->findOneBy($arrBuscaEvaluacionConocimiento);
        
        if (count($evaluacionConocimientoEntity)==0) {
            $evaluacionConocimientoEntity=new evaluacionConocimiento();
            $evaluacionConocimientoEntity->setConocimientoId($conocimientoId);
            $evaluacionConocimientoEntity->setParticipanteId($participanteId);

            $i=0;
            foreach ($aprendizajeEntity as $row) {
                $i++;
                $aprendizajeId=$row->getId();                
                $evaluacionAprendizaje{$i} = new evaluacionAprendizaje();
                $evaluacionAprendizaje{$i}->setEvaluacionConocimiento($evaluacionConocimientoEntity);             
                $evaluacionAprendizaje{$i}->setAprendizajeId($aprendizajeId);
                $evaluacionAprendizaje{$i}->setParticipanteId($participanteId);                
                $evaluacionConocimientoEntity->getEvaluacionAprendizajes()->add($evaluacionAprendizaje{$i});
            } 
        }
        
        $form = $this->createForm(new EvaluacionConocimientoType(), $evaluacionConocimientoEntity);
        
        
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            
            //$preguntaTipoId="1";  //pregutnas del tipo conocimiento
            $form->bind($request);
            
            if ($form->isValid()) {  
                                     
                //
                
                $em->persist($evaluacionConocimientoEntity);
                $em->flush();       
                
                echo "aca!1";
                
                $arrEvaluacionAprendizajes=$evaluacionConocimientoEntity->getEvaluacionAprendizajes(); 
                $evaluacionConocimientoPromedio=0;
                $contPromedio=0;
                foreach ($arrEvaluacionAprendizajes as $row) {
                    $evaluacionAprendizajeRespuesta=$row->getEvaluacionAprendizajeRespuesta();
                    if ($evaluacionAprendizajeRespuesta>0) {
                        $contPromedio++;
                        $evaluacionConocimientoPromedio=$evaluacionAprendizajeRespuesta+$evaluacionConocimientoPromedio;                    
                    }
                }
                $evaluacionConocimientoRespuesta=$evaluacionConocimientoPromedio/$contPromedio;
                $evaluacionConocimientoEntity->setEvaluacionConocimientoRespuesta($evaluacionConocimientoRespuesta);
                $em->persist($evaluacionConocimientoEntity);
                $em->flush();                
                                              
                
                $param["participanteId"]=$participanteId;
                $param["conocimientoId"]=$conocimientoId;
                $conocimientoNumero++;
                          
                $evaluacionFinalizo=false;
                if ($conocimientoNumero>$conocimientoTotal) { //esto quiere decir que termino de evaluar y se finalizo
                    $evaluacionFinalizo=true;                    
                }
                        
                $param["conocimientoNumero"]=$conocimientoNumero;

                $this->get('session')->getFlashBag()->add('notice', 'Datos grabados con exito!' );
                
                //exit();
                if (!$evaluacionFinalizo) {
                    return $this->redirect($this->generateUrl('evaluacionAprendizaje',$param));
                } else {
                    return $this->redirect($this->generateUrl('evaluacionCcResumen',$param));
                }
                
            }
        }
            
        
        $param['form'] = $form->createView();            
        $param['participanteId'] = $participanteId;            
        $param['conocimientoTotal']=$conocimientoTotal;
        $param['conocimientoNumero']=$conocimientoNumero;
        $param['conocimientoId']=$conocimientoId;            
        $param['conocimientoNombre'] = $conocimientoNombre;            
        $param['conocimientoDefinicion'] = $conocimientoDefinicion;
        $param['conocimientoData']=$conocimientoData;
        $param['aprendizajeEntity']=$aprendizajeEntity;
        $param['personaNombre']=$personaNombre;
        $param['perfilNombre']=$perfilNombre;

        return $this->render('GtSistemaBundle:Evaluacion:evaAprendizaje.html.twig', $param); 
        
    }        
    
    public function evaluacionPreguntaConocimientoAction($participanteId)
        {                   
            $em = $this->getDoctrine()->getManager();        
            $request = $this->getRequest();
            $session = $request->getSession();
            $empresaId = $session->get("empresaId");
            $usuarioId = $session->get("usuarioId");
            $preguntaTipoId="1";
            $conocimientoId=$request->get("conocimientoId");
            $conocimientoNumero=$request->get("conocimientoNumero");

            if ($conocimientoNumero=="") {
                $conocimientoNumero=1;
            }

            $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);

            $arrBuscaPerfilConocimiento=array("perfilId"=>$participanteEntity->getPerfilId());
            $perfilConocimientoEntity=$em->getRepository('GtSistemaBundle:perfilConocimiento')->findBy($arrBuscaPerfilConocimiento);
            $conocimientoTotal=count($perfilConocimientoEntity);

            //echo "conocimiento Numero: ".$conocimientoNumero;
            $i=0;

                foreach ($perfilConocimientoEntity as $row) {
                    $i++;
                    if ($i==$conocimientoNumero) {
                        $conocimientoId=$row->getConocimientoId();
                    }
                }            

            $query = $em->createQueryBuilder()
                            ->select("b.personaNombre, c.perfilNombre")
                            ->from('GtSistemaBundle:participante', 'a')
                            ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                            ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                            ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);


            $arrayData=$query->getQuery()->getArrayResult();
            foreach ($arrayData  as $row) {
                $personaNombre=$row["personaNombre"];
                $perfilNombre=$row["perfilNombre"];
            }

            $conocimientoEntity=$em->getRepository('GtSistemaBundle:conocimiento')->find($conocimientoId);

            $conocimientoNombre=$conocimientoEntity->getConocimientoNombre();
            $conocimientoDefinincion=$conocimientoEntity->getConocimientoDefinicion();        

            $arrBuscaPreguntaConocimiento=array("conocimientoId"=>$conocimientoId);        
            $preguntaConocimientoEntity=$em->getRepository('GtSistemaBundle:preguntaConocimiento')->findBy($arrBuscaPreguntaConocimiento);

            $arrBuscaEvaluacionConocimiento=array("participanteId"=>$participanteId, "conocimientoId"=>$conocimientoId);                      
            $evaluacionConocimientoEntity=$em->getRepository('GtSistemaBundle:evaluacionConocimiento')->findOneBy($arrBuscaEvaluacionConocimiento);

            if (count($evaluacionConocimientoEntity)==0) {
                $evaluacionConocimientoEntity=new evaluacionConocimiento();
                $evaluacionConocimientoEntity->setConocimientoId($conocimientoId);
                $evaluacionConocimientoEntity->setParticipanteId($participanteId);

                $i=0;
                foreach ($preguntaConocimientoEntity as $row) {
                    $i++;
                    $preguntaId=$row->getId();                
                    $evaluacionPregunta{$i} = new evaluacionPreguntaConocimiento();
                    $evaluacionPregunta{$i}->setEvaluacionConocimiento($evaluacionConocimientoEntity);             
                    $evaluacionPregunta{$i}->setPreguntaId($preguntaId);
                    $evaluacionPregunta{$i}->setParticipanteId($participanteId);                
                    $evaluacionConocimientoEntity->getEvaluacionPreguntas()->add($evaluacionPregunta{$i});
                } 
            }

            $form = $this->createForm(new EvaluacionConocimientoType("2", $preguntaTipoId), $evaluacionConocimientoEntity);


            $post=false;
            if ( $request->getMethod() == 'POST' ) {
                $post=true;

                $preguntaTipoId="1";  //pregutnas del tipo conocimiento
                $form->bind($request);

                if ($form->isValid()) {  

                    $this->get('session')->getFlashBag()->add('notice', 'Datos grabados con exito!' );

                    $em->persist($evaluacionConocimientoEntity);
                    $em->flush();       

                    $arrEvaluacionPreguntas=$evaluacionConocimientoEntity->getEvaluacionPreguntas(); 
                    $evaluacionConocimientoPromedio=0;
                    $contPromedio=0;
                    foreach ($arrEvaluacionPreguntas as $row) {                        
                        $evaluacionPreguntaRespuesta=$row->getEvaluacionPreguntaConocimientoRespuesta();
                        if ($evaluacionPreguntaRespuesta>0) {
                            $contPromedio++;
                            $evaluacionConocimientoPromedio=$evaluacionPreguntaRespuesta+$evaluacionConocimientoPromedio;                    
                        }
                    }
                    $evaluacionConocimientoRespuesta=$evaluacionConocimientoPromedio/$contPromedio;
                    $evaluacionConocimientoEntity->setEvaluacionConocimientoRespuesta($evaluacionConocimientoRespuesta);
                    $em->persist($evaluacionConocimientoEntity);
                    $em->flush();                

                    //$form = $this->createForm(new EvaluacionConocimientoType("2", $preguntaTipoId), $evaluacionConocimientoEntity);
                    $param["participanteId"]=$participanteId;
                    $param["conocimientoId"]=$conocimientoId;
                    $conocimientoNumero++;

                    $evaluacionFinalizo=false;
                    if ($conocimientoNumero>$conocimientoTotal) { //esto quiere decir que termino de evaluar y se finalizo
                        $evaluacionFinalizo=true;                    
                    }

                    $param["conocimientoNumero"]=$conocimientoNumero;

                    //exit();
                    if (!$evaluacionFinalizo) {
                        return $this->redirect($this->generateUrl('evaluacionPreguntaConocimiento',$param));
                    } else {
                        return $this->redirect($this->generateUrl('evaluacionPreguntaConocimientoResumen',$param));
                    }

                }
            }

            //if (!$post) {
                $param['form'] = $form->createView();            
                $param['participanteId'] = $participanteId;            
                $param['conocimientoTotal']=count($perfilConocimientoEntity);
                $param['conocimientoNumero']=$conocimientoNumero;
                $param['conocimientoId']=$conocimientoId;
                $param['conocimientoNombre'] = $conocimientoNombre;
                $param['conocimientoDefinicion'] = $conocimientoDefinincion;
                $param['perfilConocimientoEntity']=$perfilConocimientoEntity;
                $param['preguntaConocimientoEntity']=$preguntaConocimientoEntity;
                $param['personaNombre']=$personaNombre;
                $param['perfilNombre']=$perfilNombre;

                return $this->render('GtSistemaBundle:Evaluacion:preguntaConocimiento.html.twig', $param); 

        }

        public function evaluacionPreguntaConocimientoResumenAction($participanteId)
        {                   
            $em = $this->getDoctrine()->getManager(); 
            $request = $this->getRequest();
            $session = $request->getSession();
            $empresaId = $session->get("empresaId");
            $usuarioId = $session->get("usuarioId");

            $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
            $perfilId=$participanteEntity->getPerfilId();

            $arrBuscaPerfilConocimiento=array("perfilId"=>$participanteEntity->getPerfilId());
            //$perfilConocimientoEntity=$em->getRepository('GtSistemaBundle:perfilConocimiento')->findBy($arrBuscaPerfilConocimiento);

            $query = $em->createQueryBuilder()
                            ->select("b.personaNombre, c.perfilNombre")
                            ->from('GtSistemaBundle:participante', 'a')
                            ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                            ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                            ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);


            $arrayData=$query->getQuery()->getArrayResult();
            foreach ($arrayData  as $row) {
                $personaNombre=$row["personaNombre"];
                $perfilNombre=$row["perfilNombre"];
            }

                    $query = $em->createQueryBuilder()
                            ->select("a.conocimientoId, c.conocimientoNombre, b.evaluacionConocimientoRespuesta")
                            ->from('GtSistemaBundle:perfilConocimiento', 'a')
                            ->innerJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'a.conocimientoId = c.id')
                            ->leftJoin('GtSistemaBundle:evaluacionConocimiento', 'b', 'WITH', 'a.conocimientoId = b.conocimientoId AND b.participanteId='. $participanteId)
                            ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
                            //->andWhere('b.participanteId = :participanteId')->setParameter('participanteId', $participanteId);

            $arrayData=$query->getQuery()->getArrayResult();

            $param['perfilConocimientoEntity']=$arrayData;
            $param['participanteId']=$participanteId;
            $param['personaNombre']=$personaNombre;
            $param['perfilNombre']=$perfilNombre;

            return $this->render('GtSistemaBundle:Evaluacion:preguntaConocimientoResumen.html.twig', $param); 
        }
        
        
        public function evaluacionCcResumenAction($participanteId)
        {                   
            $em = $this->getDoctrine()->getManager(); 
            $request = $this->getRequest();
            $session = $request->getSession();
            $empresaId = $session->get("empresaId");
            $usuarioId = $session->get("usuarioId");

            $participanteEntity=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
            $perfilId=$participanteEntity->getPerfilId();

            $arrBuscaPerfilConocimiento=array("perfilId"=>$participanteEntity->getPerfilId());
            //$perfilConocimientoEntity=$em->getRepository('GtSistemaBundle:perfilConocimiento')->findBy($arrBuscaPerfilConocimiento);

            $query = $em->createQueryBuilder()
                            ->select("b.personaNombre, c.perfilNombre")
                            ->from('GtSistemaBundle:participante', 'a')
                            ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')                         
                            ->innerJoin('GtSistemaBundle:perfil', 'c', 'WITH', 'a.perfilId = c.id')                         
                            ->where('a.id = :participanteId')->setParameter('participanteId', $participanteId);


            $arrayData=$query->getQuery()->getArrayResult();
            foreach ($arrayData  as $row) {
                $personaNombre=$row["personaNombre"];
                $perfilNombre=$row["perfilNombre"];
            }

                    $query = $em->createQueryBuilder()
                            ->select("a.conocimientoId, c.conocimientoNombre, b.evaluacionConocimientoRespuesta")
                            ->from('GtSistemaBundle:perfilConocimiento', 'a')
                            ->innerJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'a.conocimientoId = c.id')
                            ->leftJoin('GtSistemaBundle:evaluacionConocimiento', 'b', 'WITH', 'a.conocimientoId = b.conocimientoId AND b.participanteId='. $participanteId)
                            ->where('a.perfilId = :perfilId')->setParameter('perfilId', $perfilId);
                            //->andWhere('b.participanteId = :participanteId')->setParameter('participanteId', $participanteId);

            $arrayData=$query->getQuery()->getArrayResult();

            $param['perfilConocimientoEntity']=$arrayData;
            $param['participanteId']=$participanteId;
            $param['personaNombre']=$personaNombre;
            $param['perfilNombre']=$perfilNombre;

            return $this->render('GtSistemaBundle:Evaluacion:evaCcResumen.html.twig', $param); 
        }
                        
}        