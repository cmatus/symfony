<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\PersonaType;
use Gt\SistemaBundle\Form\EvaluacionParticipanteType;
use Gt\SistemaBundle\Form\EvaluacionCompetenciaType;
use Gt\SistemaBundle\Form\CompetenciaType;
use Gt\SistemaBundle\Entity\participante;
use Gt\SistemaBundle\Entity\persona;
use Gt\SistemaBundle\Entity\evaluacionCompetencia;
use Gt\SistemaBundle\Entity\evaluacionConocimiento;
use Gt\SistemaBundle\Entity\evaluacionPregunta;
use Gt\SistemaBundle\Entity\evaluacionPreguntaConocimiento;
use Gt\SistemaBundle\Entity\competencia;
use Gt\SistemaBundle\Entity\conocimiento;

class ParticipanteController extends Controller
{
    
    public function participanteRegistrarAction($evaluacionId) {
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $entityPersona=new persona();   
        $form = $this->createForm(new PersonaType($em, $empresaId), $entityPersona);
        
        if ($request->getMethod() == 'POST') {                

            if ($evaluacionId>0) {                    
                $personaIds=$request->get("tbxPersonaIds");
                //echo "aca:". $personaIds;
                if ($personaIds!="") {
                    $arrPersonaIds=explode(",",$personaIds);
                    for ($i=1;$i<=count($arrPersonaIds)-1;$i++) {
                        $participante=new participante();                        
                        //$participante->setEmpresaId($empresaId);
                        $participante->setEvaluacionId($evaluacionId);                       
                        $participante->setPersonaId($arrPersonaIds[$i-1]);
                        
                        //$personaEntity=
                        $personaEntity=$em->getRepository('GtSistemaBundle:persona')->find($arrPersonaIds[$i-1]);
                        $participante->setPerfilId($personaEntity->getPerfilId());
                        $em->persist($participante);
                        $em->flush();
                    } 
                } 
            }
        }        
        
        $param['form'] = $form->createView();        
        $param['evaluacionId'] = $evaluacionId;
        return $this->render('GtSistemaBundle:Registrar:participante.html.twig', $param);
        
    }
//    public function participanteRegistrarAction($clienteId, $evaluacionId)
//    {
//        $em = $this->getDoctrine()->getManager();        
//        $request = $this->getRequest();
//        
//        $participanteId=$request->get("tbxParticipanteId");
//        
//       // $idCompetencia=$request->get("id");
//        
//        $entityParticipante=new persona();   
//        $form = $this->createForm(new PersonaType($em), $entityParticipante);
//        //echo "method: ".$request->getMethod();
//        if ($request->getMethod() == 'POST' && $participanteId=="") {            
//            //$form->bind($request);
//            $form->handleRequest($request);
// 
//            $participanteId=$form->get('id')->getData();
//   
//            if ($participanteId>0) {
//                $entityParticipante=$this->getDoctrine()
//                    ->getManager()->getRepository('GtSistemaBundle:participante')
//                    ->find($participanteId);                                
//            } 
//            
//            $form = $this->createForm(new PersonaType($em), $entityParticipante);
//            $form->bind($request);
//            if ($form->isValid()) {
//                //echo "Grabando";
//                $em->persist($entityParticipante);
//                $em->flush();
//                $aviso = "Datos registrados con exito.";
//                //$param = array( 'aviso'=> $aviso , 'accion'=> $accion );
//                //return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
//            }
//            
//            
//            
//             
//                
//            
//            
//            
//        } else {               
//            if ($participanteId!="") {                   
//                $entityParticipante=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
//                $em->remove($entityParticipante);
//                $em->flush();
//            }
//        }
//         
//        $param['form'] = $form->createView();
//        $param['clienteId'] = $clienteId;
//        $param['evaluacionId'] = $evaluacionId;
//        return $this->render('GtSistemaBundle:Registrar:participante.html.twig', $param);
//        
//    }
    
    public function participanteBorrarAction($participanteId)
    {
        
        $em = $this->getDoctrine()->getManager();
        $entityParticipante=$em->getRepository('GtSistemaBundle:participante')->find($participanteId);
        $em->remove($entityParticipante);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $entityParticipante=new persona();   
        $form = $this->createForm(new PersonaType($em), $entityParticipante);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:participante.html.twig', $param);
    }
    
    public function registrarParticipanteDatosGrabarAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        
        if ($request->getMethod() == 'POST' ) {
            $form->bind($request);
            if ($form->isValid() )
            {
                $em->persist($entidad_ciudad);
                $em->flush();
                $aviso = "Datos registrados con exito.";
                $param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }
        }                
                
    }
    
    
    protected function processForm($form, $ente, $request) 
    {
        if ( $request->getMethod() == 'POST' ) {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager('fel');
                $em->persist($ente);
                $em->flush();
                return true;
            }
        }
        return false;
    }
    
    public function participanteTablaAction($evaluacionId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        //$arrBusca=array("empresaId"=>$empresaId);
        //$arrayData = $em->getRepository('GtSistemaBundle:participante')->findBy($arrBusca);
        $response = new JsonResponse();
        
        $parametros=array("evaluacionId"=>$evaluacionId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:evaluacion')->getParticipanteTabla($parametros);
         
        return new JsonResponse($arrayData);
        
        $response->setData(array(
         'data' => $arrayData
        ));

        return $response;                

    }

    public function evaluacionParticipanteListadoAction($evaluacionId)
    {        
        $param['evaluacionId'] = $evaluacionId;
        return $this->render('GtSistemaBundle:Evaluacion:evaParticipanteListado.html.twig', $param);                
    }     
    
//    public function evaluacionParticipanteEvaluarAction($evaluacionId, $participanteId, $perfilId)
//    {        
//        $param['evaluacionId'] = $evaluacionId;
//        $param['participanteId'] = $participanteId;
//        $param['perfilId'] = $perfilId;
//        
//        return $this->render('GtSistemaBundle:Panel:evaluacionParticipanteEvaluar.html.twig', $param);                
//    }
    
//    public function evaluacionParticipanteRegistrarAction($evaluacionId, $participanteId, $perfilId) {
//        $em = $this->getDoctrine()->getManager();
//        $request = $this->getRequest();
//        $session = $request->getSession();
//        $empresaId = $session->get("empresaId");
//        $usuarioId = $session->get("usuarioId");
//        
//        $evaluacionCompetenciaEntity=new evaluacionCompetencia();   
//        
//        //$evaluacionCompetenciaEntity->setEvaluacionId($evaluacionId);
//        //$evaluacionCompetenciaEntity->setEvaluacionId($evaluacionId);
//        
//        $parametros=array(
//            "evaluacionId"=>$evaluacionId,
//            "participanteId"=>$participanteId,
//            "perfilId"=>$perfilId);
//        
//        $evaluacionCompetenciaArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionCompetenciaTabla($parametros);
//        $evaluacionConocimientoArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionCompetenciaTabla($parametros);
//       
//        $participanteEntity = $em->getRepository('GtSistemaBundle:participante')->find($participanteId);    
//        
//        //$entityEvaluacionCompetencia=new evaluacionCompetencia();
//        foreach ($participanteEntity as $row) {
//            $evaluacionCompetenciaEntity=new evaluacionCompetencia();
//            $evaluacionCompetenciaEntity->setEmpresaId($empresaId);
//            $evaluacionCompetenciaEntity->setEvaluacionId($evaluacionId);            
//            $evaluacionCompetenciaEntity->setParticipante($participanteEntity);
//            $evaluacionCompetenciaEntity->setPerfilId($perfilId);       
//            $evaluacionCompetenciaEntity->setCompetenciaId($row["competencia_id"]);
//            $participanteEntity->getEvaluacionCompetencias()->add($evaluacionCompetenciaEntity);   
//        }
//        
//        //$form = $this->createForm(new FacturadorType($em, $id_dteTipo, $id_empresa, $sistemaOpcionCodigo), $dte);
//        $form = $this->createForm(new EvaluacionParticipanteType($em), $participanteEntity);
//        
//        if ( $request->getMethod() == 'POST' ) {
////            $arrBusca=array ("evaluacionId" => $evaluacionId,   
////                                "participanteId" => $participanteId, 
////                                "perfilId" => $perfilId);
////            $evaluacionCompetenciaEntity = $em->getRepository("GtSistemaBundle:evaluacionCompetencia")->findBy($arrBusca);
////            if (count($evaluacionCompetenciaEntity)>0) {
////                foreach ($evaluacionCompetenciaEntity as $value) {
////                    $em->remove($value);
////                    echo "borrando<br>";
////                }
////                //$em->flush();
////            }
//                
//            //exit();
//            echo "aca 1";
//            echo "<pre>";
//            //echo print_r($request);
//            echo "</pre>";
//            
//            $form->bind($request);
//            
//            if ($form->isValid()) {  
//                
//                                                
//                echo "aca 2";
//                $Collection_det = $participanteEntity->getEvaluacionCompetencias();
//                foreach ($Collection_det as $value) {
//                    if ( strlen(trim($value->getEvaluacionCompetenciaRespuesta())) == 0 ) {
//                        $participanteEntity->removeEvaluacionCompetencia($value);
//                    }
//                } //Fin ciclo detalle
//                
//                echo "<pre>";
//                //echo print_r($Collection_det );
//                echo "</pre>";
//                //$participanteEntity->addEvaluacionComepentecia($Collection_det);
//                $em->persist($participanteEntity);
//                $em->flush();
//                return true;
//            }
//        }
//        
//        $param['form'] = $form->createView();
//        $param['evaluacionId'] = $evaluacionId;
//        $param['participanteId'] = $participanteId;
//        $param['perfilId'] = $perfilId;    
//        
//        return $this->render('GtSistemaBundle:Panel:evaluacionParticipanteEvaluar.html.twig', $param);
//        
//    }
            
    public function evaluacionParticipanteEvaluarAction($evaluacionId, $participanteId, $perfilId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        //echo $evaluacionId." ".$participanteId." ".$perfilId;
        //$arrBusca=array("empresaId"=>$empresaId);
        //$arrayData = $em->getRepository('GtSistemaBundle:participante')->findBy($arrBusca);
       // $response = new JsonResponse();
        
        $parametros=array(
            "evaluacionId"=>$evaluacionId,
            "participanteId"=>$participanteId,
            "perfilId"=>$perfilId,
            "evaluaPreguntas"=>"0");
        
        $evaluacionCompetenciaArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionCompetenciaTabla($parametros);
        $evaluacionConocimientoArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionConocimientoTabla($parametros);
               
        $participanteEntity = $em->getRepository('GtSistemaBundle:participante')->find($participanteId);    
        
        //$entityEvaluacionCompetencia=new evaluacionCompetencia();        
        foreach ($evaluacionCompetenciaArray as $row) {            
            if ($row["evaluacionCompetenciaRespuesta"]=="") {
                $evaluacionCompetenciaEntity=new evaluacionCompetencia();
                //$evaluacionCompetenciaEntity->setEmpresaId($empresaId);            
                //$evaluacionCompetenciaEntity->setEvaluacionId($evaluacionId); 
                //$evaluacionCompetenciaEntity->setPerfilId($perfilId);
                $evaluacionCompetenciaEntity->setParticipante($participanteEntity);                     
                $evaluacionCompetenciaEntity->setCompetenciaId($row["competencia_id"]);
                $evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
                $participanteEntity->getEvaluacionCompetencias()->add($evaluacionCompetenciaEntity);   
            } else {
                $arrFind=array(
                        
                        "participanteId"=>$participanteId,
                        
                        "competenciaId"=>$row["competencia_id"]);
                $evaluacionCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionCompetencia')->findOneBy($arrFind);
                $evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
            }                        
        }

        foreach ($evaluacionConocimientoArray as $row) {
            if ($row["evaluacionConocimientoRespuesta"]=="") {
                $evaluacionConocimientoEntity=new evaluacionConocimiento();
                //$evaluacionConocimientoEntity->setEmpresaId($empresaId);    
                //$evaluacionConocimientoEntity->setEvaluacionId($evaluacionId); 
                //$evaluacionConocimientoEntity->setPerfilId($perfilId);
                $evaluacionConocimientoEntity->setParticipante($participanteEntity);
                $evaluacionConocimientoEntity->setConocimientoId($row["conocimiento_id"]);
                $evaluacionConocimientoEntity->setConocimientoNombre($row["conocimientoNombre"]);

                $participanteEntity->getEvaluacionConocimientos()->add($evaluacionConocimientoEntity);   
            } else {
                $arrFind=array(
                        //"evaluacionId"=>$evaluacionId,
                        "participanteId"=>$participanteId,
                        //"perfilId"=>$perfilId,
                        "conocimientoId"=>$row["conocimiento_id"]);
                $evaluacionConocimientoEntity=$em->getRepository('GtSistemaBundle:evaluacionConocimiento')->findOneBy($arrFind);
                $evaluacionConocimientoEntity->setConocimientoNombre($row["conocimientoNombre"]);
            }                        
        }        
        
        $form = $this->createForm(new EvaluacionParticipanteType("1"), $participanteEntity);
        //$form = $this->createForm(new competenciaType(), $entityCompetencia);
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            $form->bind($request);
            //echo "haciendo post!";
            if ($form->isValid()) {  
                
                                                
               // echo "aca 2";
                $Collection_det = $participanteEntity->getEvaluacionCompetencias();
                foreach ($Collection_det as $value) {
                    if ( strlen(trim($value->getEvaluacionCompetenciaRespuesta())) == 0 ) {
                        $participanteEntity->removeEvaluacionCompetencia($value);
                    }
                } //Fin ciclo detalle
                
                $Collection_det = $participanteEntity->getEvaluacionConocimientos();
                foreach ($Collection_det as $value) {
                    if ( strlen(trim($value->getEvaluacionConocimientoRespuesta())) == 0 ) {
                        $participanteEntity->removeEvaluacionConocimiento($value);
                    }
                } //Fin ciclo detalle
                
                $preguntaTipoId="1";
                $preguntaClasificacionId="1";
               // echo "<pre>";
                //echo print_r($Collection_det );
                //echo "</pre>";
                //$participanteEntity->addEvaluacionComepentecia($Collection_det);
                $em->persist($participanteEntity);
                $em->flush();                
            }
        }
        
        
        //return new JsonResponse($arrayData);
        
//        $response->setData(array(
//         'data' => $arrayData
//        ));
//
//        return $response;             
        if (!$post) {
            $param['form'] = $form->createView();
            $param['evaluacionId'] = $evaluacionId;
            $param['participanteId'] = $participanteId;
            $param['perfilId'] = $perfilId;    
            return $this->render('GtSistemaBundle:Panel:evaluacionParticipanteEvaluar.html.twig', $param);        
        } else {
            
            $param['evaluacionId'] = $evaluacionId;
            $param['participanteId'] = $participanteId;
            $param['perfilId'] = $perfilId;
            $param['preguntaTipoId'] = $preguntaTipoId;
            $param['preguntaClasificacionId'] = $preguntaClasificacionId;
            return $this->redirect($this->generateUrl('evaluacionPreguntaCompetencia',$param));
        }
    }public function evaluacionPreguntaCompetenciaAction($evaluacionId, $participanteId, $perfilId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $preguntaTipoId="1";
        
        //$arrBusca=array("empresaId"=>$empresaId);
        //$arrayData = $em->getRepository('GtSistemaBundle:participante')->findBy($arrBusca);
       // $response = new JsonResponse();
        
        $parametros=array(
            "evaluacionId"=>$evaluacionId,            
            "participanteId"=>$participanteId,
            "perfilId"=>$perfilId,
            "evaluaPreguntas"=>"1");
        
        $participanteEntity = $em->getRepository('GtSistemaBundle:participante')->find($participanteId);    
                        
        $evaluacionCompetenciaArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionCompetenciaTabla($parametros);
        
        //echo count($evaluacionCompetenciaArray);
        //exit();
        
        foreach ($evaluacionCompetenciaArray as $row) {            
            if ($row["evaluacionCompetenciaRespuesta"]!="") {
            
//            if ($row["evaluacionCompetenciaRespuesta"]=="") {
//                  $evaluacionCompetenciaEntity=new evaluacionCompetencia();
//                  $evaluacionCompetenciaEntity->setEmpresaId($empresaId);            
//                  $evaluacionCompetenciaEntity->setEvaluacionId($evaluacionId); 
//                  $evaluacionCompetenciaEntity->setPerfilId($perfilId);
//                  $evaluacionCompetenciaEntity->setParticipante($participanteEntity);                     
//                  $evaluacionCompetenciaEntity->setCompetenciaId($row["competencia_id"]);
//                  $evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
//                  $participanteEntity->getEvaluacionCompetencias()->add($evaluacionCompetenciaEntity);                                                                     
                  
            //  } else {
                  $arrFind=array(                            
                          //"evaluacionId"=>$evaluacionId,
                          "participanteId"=>$participanteId,
                          //"perfilId"=>$perfilId,
                          "competenciaId"=>$row["competencia_id"]);
                  
                  
                  $evaluacionCompetenciaEntity=$em->getRepository('GtSistemaBundle:evaluacionCompetencia')->findOneBy($arrFind);
                  //echo count($evaluacionCompetenciaEntity);
                  $evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
                  
                  //$competenciaEntity=$em->getRepository('GtSistemaBundle:competencia')->findOneBy($arrFind);
//                  echo "<pre>";
//                  echo print_r($arrFind);
//                  echo "</pre>";
                  
                  //echo "competencia nombre:".$row["competenciaNombre"]."<br>";
                  //$evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
                  
                   $parametros=array(
                    "evaluacionId"=>$evaluacionId,            
                    "participanteId"=>$participanteId,
                    "perfilId"=>$perfilId,                    
                    "competenciaId"=>$row["competencia_id"]);
                  
                  //echo "<pre>";
                  //print_r($parametros);
                  //echo "</pre>";
//                  echo "competencia id:".$row["competencia_id"];
                  
                  $evaluacionPreguntaArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionPreguntaCompetenciaTabla($parametros);
                  
                  //echo "pregunta array:".count($evaluacionPreguntaArray)."<br>";
                  
                  foreach ($evaluacionPreguntaArray as $row2) {      
                    $evaluacionCompetenciaId=$row2["evaluacionCompetencia_id"];
                    //echo "Pregunta_id: ".$row2["pregunta_id"]." - Respuesta=".$row2["evaluacionPreguntaRespuesta"]."</br>";
                    if ($row2["evaluacionPreguntaRespuesta"]=="") {
                       // echo "<br><br>acaaaaaaaaaaaaaa<br>";
                        $evaluacionPreguntaEntity=new evaluacionPregunta();
                        //$evaluacionPreguntaEntity->setEmpresaId($empresaId);            
                        //$evaluacionPreguntaEntity->setEvaluacionId($evaluacionId); 
                        //$evaluacionPreguntaEntity->setPerfilId($perfilId);                        
                        $evaluacionPreguntaEntity->setEvaluacionCompetencia($evaluacionCompetenciaEntity);
                        $evaluacionPreguntaEntity->setParticipanteId($participanteId);
                                                                        
                        $evaluacionPreguntaEntity->setPreguntaId($row2["pregunta_id"]);
                        $evaluacionPreguntaEntity->setPreguntaNombre($row2["preguntaNombre"]);
                        if (count($evaluacionCompetenciaEntity)>0) {                        
                            
                            //echo "Pregunta_id: ".$row2["pregunta_id"]." - Participante=".$participanteId."</br>";
                            
                            $evaluacionCompetenciaEntity->setCompetenciaId($row["competencia_id"]);
                            $evaluacionCompetenciaEntity->setCompetenciaNombre($row["competenciaNombre"]);
                            $evaluacionCompetenciaEntity->getEvaluacionPreguntas()->add($evaluacionPreguntaEntity);                           
                        } else {
                            echo "CON EVALUACION";
                        }
                        
                    } else {
                        $arrFind=array(
                                "evaluacionCompetenciaId"=>$evaluacionCompetenciaId,
                                "participanteId"=>$participanteId,
                                //"perfilId"=>$perfilId,
                                "preguntaId"=>$row2["pregunta_id"]);
                        
//                        echo "<pre>";
//                        echo print_r($arrFind);
//                        echo "</pre>";
                        $evaluacionPreguntaEntity=$em->getRepository('GtSistemaBundle:evaluacionPregunta')->findOneBy($arrFind);
                        //echo "cant:".count($evaluacionPreguntaEntity);
                        $evaluacionPreguntaEntity->setParticipanteId($participanteId);
                        
                        $evaluacionPreguntaEntity->setPreguntaNombre($row2["preguntaNombre"]);
                        //$evaluacionCompetenciaEntity->getEvaluacionPreguntas()->add($evaluacionPreguntaEntity);   
                    }                        
                }
                
                
              }                        
          }

                
        $form = $this->createForm(new EvaluacionParticipanteType("2", $preguntaTipoId), $participanteEntity);
        //$form = $this->createForm(new EvaluacionCpType("2", $preguntaTipoId), $participanteEntity);
        //$form = $this->createForm(new EvaluacionCompetenciaType("2","2"), $participanteEntity);
        //echo $form->get('competenciaNombre')->getConfig();
        
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            
            $preguntaTipoId="1";  //pregutnas del tipo conocimiento
            $form->bind($request);
            
            if ($form->isValid()) {  
                
                                     
                $Collection_det = $participanteEntity->getEvaluacionCompetencias();
                foreach ($Collection_det as $evaluacionCompetencia) {
                    $Collection_det2= $evaluacionCompetencia->getEvaluacionPreguntas();
                    foreach ($Collection_det2 as $evaluacionPregunta) {            
                        if ( strlen(trim($evaluacionPregunta->getEvaluacionPreguntaRespuesta())) == 0 ) {
                            $evaluacionCompetencia->removeEvaluacionPregunta($evaluacionPregunta);
                        }
                    }
                } //Fin ciclo detalle
                
                
//                echo "aca 6";
//                $Collection_det = $evaluacionCompetenciaEntity->getEvaluacionPreguntas();
//                foreach ($Collection_det as $value) {
//                    if ( strlen(trim($value->getEvaluacionPreguntaRespuesta())) == 0 ) {
//                        $evaluacionCompetenciaEntity->removeEvaluacionPregunta($value);
//                    }
//                } //Fin ciclo detalle
                
                $em->persist($participanteEntity);
                $em->flush();                
            }
        }
            
        if (!$post) {
            $param['form'] = $form->createView();
            $param['evaluacionId'] = $evaluacionId;
            $param['participanteId'] = $participanteId;
            $param['perfilId'] = $perfilId;
            return $this->render('GtSistemaBundle:Panel:evaluacionPreguntaCompetencia.html.twig', $param); 
        } else {
            //return $this->render('GtSistemaBundle:Panel:evaluacionPreguntaConocimiento.html.twig', $param);
            $param['evaluacionId'] = $evaluacionId;
            $param['participanteId'] = $participanteId;
            $param['perfilId'] = $perfilId;
            
            return $this->redirect($this->generateUrl('evaluacionPreguntaConocimiento',$param));
        }
        
    }
    
        
    
    public function evaluacionPreguntaConocimientoAction($evaluacionId, $participanteId, $perfilId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $preguntaTipoId="2";
        
        $parametros=array(
            "evaluacionId"=>$evaluacionId,            
            "participanteId"=>$participanteId,
            "perfilId"=>$perfilId,
            "evaluaPreguntas"=>"1");                       
        
        $participanteEntity = $em->getRepository('GtSistemaBundle:participante')->find($participanteId);    
                        
        $evaluacionConocimientoArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionConocimientoTabla($parametros);
                       
        foreach ($evaluacionConocimientoArray as $row) {            
            if ($row["evaluacionConocimientoRespuesta"]!="") {
            

                  $arrFind=array(                            
                          //"evaluacionId"=>$evaluacionId,
                          "participanteId"=>$participanteId,
                          //"perfilId"=>$perfilId,
                          "conocimientoId"=>$row["conocimiento_id"]);
                  
                  
                  $evaluacionConocimientoEntity=$em->getRepository('GtSistemaBundle:evaluacionConocimiento')->findOneBy($arrFind);

                  $evaluacionConocimientoEntity->setConocimientoNombre($row["conocimientoNombre"]);
                  
                   $parametros=array(
                    "evaluacionId"=>$evaluacionId,            
                    "participanteId"=>$participanteId,
                    "perfilId"=>$perfilId,                    
                    "conocimientoId"=>$row["conocimiento_id"]);
                  

                  
                  $evaluacionPreguntaArray=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionPreguntaConocimientoTabla($parametros);
                  
                  //echo "pregunta array:".count($evaluacionPreguntaArray)."<br>";
                  
                  foreach ($evaluacionPreguntaArray as $row2) {      
                    $evaluacionConocimientoId=$row2["evaluacionConocimiento_id"];
                    //echo "Pregunta_id: ".$row2["pregunta_id"]." - Respuesta=".$row2["evaluacionPreguntaRespuesta"]."</br>";
                    if ($row2["evaluacionPreguntaConocimientoRespuesta"]=="") {
                       // echo "<br><br>acaaaaaaaaaaaaaa<br>";
                        $evaluacionPreguntaEntity=new evaluacionPreguntaConocimiento();
                      
                        $evaluacionPreguntaEntity->setEvaluacionConocimiento($evaluacionConocimientoEntity);
                        $evaluacionPreguntaEntity->setParticipanteId($participanteId);
                                                                        
                        $evaluacionPreguntaEntity->setPreguntaId($row2["pregunta_id"]);
                        $evaluacionPreguntaEntity->setPreguntaNombre($row2["preguntaNombre"]);
                        if (count($evaluacionConocimientoEntity)>0) {                                                                                                            
                            $evaluacionConocimientoEntity->setConocimientoId($row["conocimiento_id"]);
                            $evaluacionConocimientoEntity->setConocimientoNombre($row["conocimientoNombre"]);
                            $evaluacionConocimientoEntity->getEvaluacionPreguntas()->add($evaluacionPreguntaEntity);                           
                        } else {
                            echo "CON EVALUACION";
                        }
                        
                    } else {
                        $arrFind=array(
                                "evaluacionConocimientoId"=>$evaluacionConocimientoId,
                                "participanteId"=>$participanteId,
                                //"perfilId"=>$perfilId,
                                "preguntaId"=>$row2["pregunta_id"]);
                        
//                        echo "<pre>";
//                        echo print_r($arrFind);
//                        echo "</pre>";
                        $evaluacionPreguntaEntity=$em->getRepository('GtSistemaBundle:evaluacionPreguntaConocimiento')->findOneBy($arrFind);
                        $evaluacionPreguntaEntity->setParticipanteId($participanteId);
                        
                        $evaluacionPreguntaEntity->setPreguntaNombre($row2["preguntaNombre"]);
                        //$evaluacionConocimientoEntity->getEvaluacionPreguntas()->add($evaluacionPreguntaEntity);   
                    }                        
                }
                
                
              }                        
          }

        $form = $this->createForm(new EvaluacionParticipanteType("3", $preguntaTipoId), $participanteEntity);
        
        $post=false;
        if ( $request->getMethod() == 'POST' ) {
            $post=true;
            
            $preguntaTipoId="1";  //pregutnas del tipo conocimiento
            $form->bind($request);
            //echo "aca 5";
            if ($form->isValid()) {  
                
                                     
                $Collection_det = $participanteEntity->getEvaluacionConocimientos();
                foreach ($Collection_det as $evaluacionConocimiento) {
                    $Collection_det2= $evaluacionConocimiento->getEvaluacionPreguntas();
                    foreach ($Collection_det2 as $evaluacionPregunta) {            
                        if ( strlen(trim($evaluacionPregunta->getEvaluacionPreguntaConocimientoRespuesta())) == 0 ) {
                            $evaluacionConocimiento->removeEvaluacionPregunta($evaluacionPregunta);
                        }
                    }
                } //Fin ciclo detalle
                
                $em->persist($participanteEntity);
                $em->flush();                
            }
        }
        $param['form'] = $form->createView();
        $param['evaluacionId'] = $evaluacionId;
        $param['participanteId'] = $participanteId;
        $param['perfilId'] = $perfilId;
            
        if (!$post) {
            return $this->render('GtSistemaBundle:Panel:evaluacionPreguntaConocimiento.html.twig', $param); 
        } else {
            //return $this->render('GtSistemaBundle:Panel:evaluacionPreguntaConocimiento.html.twig', $param); 
            //return $this->redirect($this->generateUrl('evaluacionPreguntaConocimiento',$param));
        }
    }    
    
    public function evaluacionParticipanteEvaluarConocimientoTablaAction($evaluacionId, $participanteId, $perfilId)
    {                   
        $em = $this->getDoctrine()->getManager();        
        //$arrBusca=array("empresaId"=>$empresaId);
        //$arrayData = $em->getRepository('GtSistemaBundle:participante')->findBy($arrBusca);
        $response = new JsonResponse();
        
        $parametros=array(
            "evaluacionId"=>$evaluacionId,
            "participanteId"=>$participanteId,
            "perfilId"=>$perfilId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:evaluacion')->getEvaluacionParticipanteEvaluarConocimientoTabla($parametros);
         
        return new JsonResponse($arrayData);
        
        $response->setData(array(
         'data' => $arrayData
        ));

        return $response;                

    }
    
    
}
