<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaeController
 *
 * @author Alex
 */

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/***** actividadClavees ******/
use Gt\SistemaBundle\Entity\empresa;
//use Gt\SistemaBundle\Entity\usuario;
use Gt\UserBundle\Entity\User;
use Gt\SistemaBundle\Entity\empresaUsuario;
use Gt\SistemaBundle\Entity\Rol;
use Gt\SistemaBundle\Entity\perfil;
use Gt\SistemaBundle\Entity\perfilCompetencia;
use Gt\SistemaBundle\Entity\perfilConocimiento;
use Gt\SistemaBundle\Entity\persona;
use Gt\SistemaBundle\Entity\competencia;
use Gt\SistemaBundle\Entity\actividadClave;
use Gt\SistemaBundle\Entity\aprendizaje;
use Gt\SistemaBundle\Entity\conocimiento;
use Gt\SistemaBundle\Entity\curso;
use Gt\SistemaBundle\Entity\modulo;
use Gt\SistemaBundle\Entity\pregunta;
use Gt\SistemaBundle\Entity\preguntaCompetencia;
use Gt\SistemaBundle\Entity\preguntaConocimiento;
use Gt\SistemaBundle\Entity\preguntaActividadClave;
use Gt\SistemaBundle\Entity\preguntaAprendizaje;
use Gt\SistemaBundle\Entity\evaluacion;

/***** formularios ****/
use Gt\SistemaBundle\Form\ClienteType;
use Gt\SistemaBundle\Form\PerfilType;
use Gt\SistemaBundle\Form\PersonaType;
use Gt\SistemaBundle\Form\CompetenciaType;
use Gt\SistemaBundle\Form\ActividadClaveType;
use Gt\SistemaBundle\Form\AprendizajeType;
use Gt\SistemaBundle\Form\ConocimientoType;
use Gt\SistemaBundle\Form\CursoType;
use Gt\SistemaBundle\Form\PreguntaCompetenciaType;
use Gt\SistemaBundle\Form\PreguntaConocimientoType;
//use Gt\SistemaBundle\Form\PreguntaCompetenciaType;
//use Gt\SistemaBundle\Form\PreguntaCompetenciaType;
use Gt\SistemaBundle\Form\EvaluacionType;

class MaestroController extends Controller
{
    public function maestroMenuAction()
    {        
        return $this->render('GtSistemaBundle:Registrar:maeMenu.html.twig');
    }
        
    public function maestroAction($maeTipoId)
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $winParent=$request->get("winParent");
        $maeParametros=$request->get("maeParametros");
        $arrParametros = json_decode($maeParametros);
        
        $parametrosForm["maeTipoId"]=$maeTipoId;
        $parametrosForm["winParent"]=$winParent;
                
        switch ($maeTipoId) {
            case "1": //perfiles
                $formView="Registrar:perfil.html.twig";                
                break;
            case "2": //persona
                $formView="Registrar:persona.html.twig";                
                break;
            case "3": //competencia                
                //$parametrosForm["competenciaId"]=$competenciaId;
                $formView="Registrar:competencia.html.twig";                            
                break;
            case "4": //Actividades Claves 
                foreach($arrParametros as $rowParametro) {
                    $competenciaId=$rowParametro->competenciaId;                
                }
                $parametrosForm["competenciaId"]=$competenciaId;
                $formView="Registrar:actividadClave.html.twig";                
                break;
            case "5": //Aprendizaje
                foreach($arrParametros as $rowParametro) {
                    $conocimientoId=$rowParametro->conocimientoId;                
                }
                $parametrosForm["conocimientoId"]=$conocimientoId;
                $formView="Registrar:aprendizaje.html.twig";                
                break;                
            case "6": //conocimiento                
                $formView="Registrar:conocimiento.html.twig";
                break;
            case "7": //pregunta
                //$preguntaTipoId="1";
                
                $preguntaTipoId=$request->get("preguntaTipoId");//$parametros["entidadId"];
                
                if ($preguntaTipoId=="") {
                    $preguntaTipoId="1";
                }
                
//                foreach($arrParametros as $rowParametro) {
//                    $preguntaTipoId=$rowParametro->preguntaTipoId;
//                }
                $parametrosForm["preguntaTipoId"]=$preguntaTipoId;
                $formView="Registrar:pregunta.html.twig";
                break;
                
            case "8": //cliente/empresa
                //$parametrosForm["preguntaTipoId"]=$preguntaTipoId;
                $formView="Registrar:cliente.html.twig";
                
                break;
            case "9": //curso
                //$parametrosForm["preguntaTipoId"]=$preguntaTipoId;
                $formView="Registrar:curso.html.twig";
                
                break;            
            case "11": //evaluacion
                //$parametrosForm["preguntaTipoId"]=$preguntaTipoId;
                $formView="Registrar:evaluacion.html.twig";
                
                break;                        
        }
        
        return $this->render('GtSistemaBundle:'.$formView, $parametrosForm);                

    }
    
    
    public function maestroTablaAction($maeTipoId) {
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        //$parametros=$request->get("parametros");
        $empId=$request->getSession()->get('empresaId');
        //$arrBusca=array("preguntaTipoId"=>$preguntaTipoId);
        //$arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy($arrBusca);
        $response = new JsonResponse();
        
        switch ($maeTipoId) {
            case "1": //perfiles
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:perfil', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    //->where('a.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                $arrayData=$query->getQuery()->getArrayResult();
                break;
            case "2": //personas
                $query = $em->createQueryBuilder()
                    ->select("a.id,"
                            . "a.empresaId,"
                            . "a.personaNombre,"
                            . "a.personaCorreo,"
                            . "a.perfilId,"
                            . "b.perfilNombre,"
                            . "c.personaNombre as personaSuperior")
                    ->from('GtSistemaBundle:persona', 'a')
                    ->innerJoin('GtSistemaBundle:perfil', 'b', 'WITH', 'a.perfilId = b.id') 
                    ->leftJoin('GtSistemaBundle:persona', 'c', 'WITH', 'a.personaId = c.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    //->where('a.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                $arrayData=$query->getQuery()->getArrayResult();
                break;
            case "3": //competencia
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:competencia', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    //->where('a.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                break;
            case "4": //actividades claves           
                //$actividadClaveTipoId=$maeTipoId;
                $competenciaId=$request->get("competenciaId");//$parametros["entidadId"];
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:actividadClave', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    ->where('a.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId);
                    //->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                break;
            case "5": //aprendizajes
                //$actividadClaveTipoId=$maeTipoId;
                $conocimientoId=$request->get("conocimientoId");//$parametros["entidadId"];
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:aprendizaje', 'a')
                    ->where('a.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId);

                $arrayData=$query->getQuery()->getArrayResult();
                
                break;
            
            case "6": //conocimiento
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:conocimiento', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'b.conocimientoId = c.id') 
                    //->where('a.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                
                break;
            
            case "7": //pregunta
                
                $preguntaTipoId=$request->get("preguntaTipoId");//$parametros["entidadId"];
                
                
                         
                
                        
//                $query = $em->createQueryBuilder()
//                    ->select("a")
//                    ->from('GtSistemaBundle:pregunta', 'a')
//                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId)
//                    ->andWhere('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);

                
                switch ($preguntaTipoId) {
                    case "1":
                        $query = $em->createQueryBuilder()
                        ->select("a.id, a.preguntaCompetenciaNombre as preguntaNombre, a.competenciaId, b.competenciaNombre ")
                        ->from('GtSistemaBundle:preguntaCompetencia', 'a')
                        //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                        ->innerJoin('GtSistemaBundle:competencia', 'b', 'WITH', 'a.competenciaId = b.id') 
                        ->where('b.empresaId = :empresaId')->setParameter('empresaId', $empId);
                        //->andWhere('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);
                        break;
                    case "2":
                        $query = $em->createQueryBuilder()
                        ->select("a.id, a.preguntaConocimientoNombre as preguntaNombre, a.conocimientoId, b.conocimientoNombre ")
                        ->from('GtSistemaBundle:preguntaConocimiento', 'a')
                       
                        ->innerJoin('GtSistemaBundle:conocimiento', 'b', 'WITH', 'a.conocimientoId = b.id') 
                        ->where('b.empresaId = :empresaId')->setParameter('empresaId', $empId);
                        //->andWhere('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);
                        break;
                }
                
                $arrayData=$query->getQuery()->getArrayResult();
                                
//                foreach($arrayData as $key => $value)
//                {
//                   // echo $arrayData[$key]->getClasificaciones();
//                    $preguntaId=$arrayData[$key]['id'];
//
//                    $arrBusca=array("preguntaId"=>$preguntaId);
//                    //$preguntaClasificacionData = $em->getRepository('GtSistemaBundle:preguntaclasificacion')->findBy($arrBusca);
//                    $preguntaClasificacion="";
//                    $preguntaData=$em->getRepository('GtSistemaBundle:pregunta')->find($preguntaId);
//                    $arrPreguntaClasificacion=$preguntaData->getClasificaciones(); 
//                    if (count($arrPreguntaClasificacion)>=1) {
//                        foreach($arrPreguntaClasificacion as $key2 => $rowClasificacion) {
//                            
//                            $preguntaClasificacion.=$rowClasificacion->getClasificacionNombre()."<br>";
//                        }
//                    }
//                    
//                    $arrayData[$key]['preguntaClasificacion'] = $preguntaClasificacion;
//
//                }
                
                break;
            
            case "8": //Clientes-Empresa
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:empresa', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'b.conocimientoId = c.id') 
                    //->where('a.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                
                break;
            case "9": //Curso
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:curso', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'b.conocimientoId = c.id') 
                    //->where('a.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                
                break;
            
            case "10": //Modulo Curso
                //$actividadClaveTipoId=$maeTipoId;
                $cursoId=$request->get("cursoId");//$parametros["entidadId"];
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:modulo', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    ->where('a.competenciaId = :cursoId')->setParameter('cursoId', $cursoId);
                    //->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                break;            
            
            case "11": //Evaluaciones
                //$actividadClaveTipoId=$maeTipoId;
                $evaluacionId=$request->get("evaluacionId");//$parametros["entidadId"];
                
                $query = $em->createQueryBuilder()
                    ->select("a")
                    ->from('GtSistemaBundle:evaluacion', 'a')
                    //->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                    //->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                    //->where('a.competenciaId = :cursoId')->setParameter('cursoId', $cursoId);
                    ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empId);
                    //->andWhere('a.actividadClaveTipoId = :actividadClaveTipoId')->setParameter('actividadClaveTipoId', $actividadClaveTipoId);

                //echo $query->getQuery()->getSQL();
                $arrayData=$query->getQuery()->getArrayResult();
                break;               
            
        }
        
        
        return new JsonResponse($arrayData);
        
    }
    
    //public function maestroRegistrarAction($maeTipoId, $maeParametros) {
    public function maestroRegistrarAction($maeParametros) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $empId = $request->getSession()->get('empresaId');
        //$winParent=$request->get("winParent");
        $arrParametros = json_decode($maeParametros);
                        
        foreach($arrParametros as $rowParametro) {            
            $maeTipoId  =$rowParametro->maeTipoId;
            $maeNombre  =$rowParametro->maeNombre;                    
            $winParent  =$rowParametro->winParent;
            $entityId   =$rowParametro->entityId;
        }
        
        $formParametros["maeTipoId"]=$maeTipoId;
        $arrActividadClave=null;
        $arrAprendizaje=null;
        $arrModulo=null;
        
        switch ($maeTipoId) {
            case "1": //Perfiles
                
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $perfilId=$entityId;                    
                }
                if ($perfilId=="0") {
                    $perfilEntity = new perfil();
                    $perfilEntity->setEmpresaId($empId);
                } else {
                    $perfilEntity = $em->getRepository('GtSistemaBundle:perfil')->find($perfilId); 
                                                           
                    $arrFind=array('perfilId'=>$perfilId);
                    $entityPerfilCompetencia = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrFind);
                    foreach ($entityPerfilCompetencia as $value) {$em->remove($value);}

                    $arrFind=array('perfilId'=>$perfilId);
                    $entityPerfilConocimiento = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrFind);
                    foreach ($entityPerfilConocimiento as $value) {$em->remove($value);}

                    $competenciaIds=$request->get("tbxCompetenciaIds");
                     
                    if ($competenciaIds!="") {
                        $arrCompetencia=explode(",",$competenciaIds);
                        
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
    //                        $arrFind=array('competenciaId'=>$competenciaId, 'preguntaId'=>$preguntaId);
    //                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
    //                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrCompetencia)-1;$i++) {
                            $perfilCompetencia=new perfilCompetencia();                        
                            $perfilCompetencia->setPerfilId($perfilId);
                            $perfilCompetencia->setCompetenciaId($arrCompetencia[$i-1]);
                            $em->persist($perfilCompetencia);
                            $em->flush();
                        } 
                    } 

                    $conocimientoIds=$request->get("tbxConocimientoIds");
                    if ($conocimientoIds!="") {
                        $arrConocimiento=explode(",",$conocimientoIds);
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
    //                        $arrFind=array('competenciaId'=>$competenciaId, 'preguntaId'=>$preguntaId);
    //                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
    //                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrConocimiento)-1;$i++) {
                            $perfilConocimiento=new perfilConocimiento();                        
                            $perfilConocimiento->setPerfilId($perfilId);
                            $perfilConocimiento->setConocimientoId($arrConocimiento[$i-1]);                        
                            $em->persist($perfilConocimiento);
                            $em->flush();
                        } 
                    }



                }
                $entity=$perfilEntity;                                
                $form = $this->createForm(new PerfilType($em, $empId), $perfilEntity);
                $formParametros["perfilId"]=$perfilId;
                $formView="Registrar:perfilRegistrar.html.twig";
                
                break;
            case "2": //Personas
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $personaId=$entityId;                    
                }
                if ($personaId=="0") {
                    $personaEntity = new persona();
                    $personaEntity->setEmpresaId($empId);
                } else {
                    $personaEntity = $em->getRepository('GtSistemaBundle:persona')->find($personaId); 
                }
                $entity=$personaEntity;                                
                $form = $this->createForm(new PersonaType($em, $empId), $personaEntity);
                $formParametros["personaId"]=$personaId;
                $formView="Registrar:personaRegistrar.html.twig";
                
                break;
            case "3": //Competencia
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $competenciaId=$entityId;
                    
                    if (key_exists("dataActividadClave", $rowParametro)) {
                        $jsnActividadClave=$request->get("tbxActividadClave");
                        $arrActividadClave = json_decode($jsnActividadClave);
                    }
                }
                
                if ($competenciaId=="0") {
                    $competenciaEntity = new competencia();
                    $competenciaEntity->setEmpresaId($empId);
                } else {
                    $competenciaEntity = $em->getRepository('GtSistemaBundle:competencia')->find($competenciaId); 
                }
                
                $entity=$competenciaEntity;
                $form = $this->createForm(new CompetenciaType(), $competenciaEntity);
                $formParametros["competenciaId"]=$competenciaId;
                $formView="Registrar:competenciaRegistrar.html.twig";
                break;
            case "4": //Actvidad Clave
                                
                foreach($arrParametros as $rowParametro) {                  
                    $entityId=$rowParametro->entityId;
                    $actividadClaveId=$entityId;
                    $competenciaId=$rowParametro->competenciaId;
                }        
                
                $formParametros["competenciaId"]=$competenciaId;
                
                //$actividadClaveId=$maestroId;   
                $actividadClaveTipoId="1";
                if ($actividadClaveId=="0") {
                    $actividadClaveEntity = new actividadClave();
                    //$actividadClaveEntity->setEmpresaId($empId);
                    //$actividadClaveEntity->setEntidadTipoId($actividadClaveTipoId);
                    $actividadClaveEntity->setCompetenciaId($competenciaId);
                    
                } else {
                    $actividadClaveEntity = $em->getRepository('GtSistemaBundle:actividadClave')->find($actividadClaveId); 
                }
                $entity=$actividadClaveEntity;                                        
                $form = $this->createForm(new ActividadClaveType(
                                array(                                   
                                    'idTipoEntidad'=>$actividadClaveTipoId,
                                    'empresaId'=>$empId,
                                    'em'=>$em
                                    )
                                ), $actividadClaveEntity);
                $formView="Registrar:actividadClaveRegistrar.html.twig";
                //$formParametros["id_tipo_actividadClave"]=$actividadClaveTipoId;                
                break;
            case "5": //Aprendizaje
                                
                foreach($arrParametros as $rowParametro) {                  
                    $entityId=$rowParametro->entityId;
                    $aprendizajeId=$entityId;
                    $conocimientoId=$rowParametro->conocimientoId;
                }        
                
                $formParametros["conocimientoId"]=$conocimientoId;
                
                //$aprendizajeId=$maestroId;   
                $aprendizajeTipoId="1";
                if ($aprendizajeId=="0") {
                    $aprendizajeEntity = new aprendizaje();
                    //$aprendizajeEntity->setEmpresaId($empId);
                    //$aprendizajeEntity->setEntidadTipoId($aprendizajeTipoId);
                    $aprendizajeEntity->setConocimientoId($conocimientoId);
                    
                } else {
                    $aprendizajeEntity = $em->getRepository('GtSistemaBundle:aprendizaje')->find($aprendizajeId); 
                }
                $entity=$aprendizajeEntity;                                        
                $form = $this->createForm(new AprendizajeType(), $aprendizajeEntity);
                $formView="Registrar:aprendizajeRegistrar.html.twig";
                
                break;
            case "6": //Conocimiento
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $conocimientoId=$entityId;        
                    
                    if (key_exists("dataAprendizaje", $rowParametro)) {
                        $jsnAprendizaje=$request->get("tbxAprendizaje");
                        $arrAprendizaje = json_decode($jsnAprendizaje);
                    }
                    
                }
                if ($conocimientoId=="0") {
                    $conocimientoEntity = new conocimiento();
                    $conocimientoEntity->setEmpresaId($empId);
                } else {
                    $conocimientoEntity = $em->getRepository('GtSistemaBundle:conocimiento')->find($conocimientoId); 
                }
                $entity=$conocimientoEntity;                                
                $form = $this->createForm(new ConocimientoType(), $conocimientoEntity);
                $formParametros["conocimientoId"]=$conocimientoId;
                $formView="Registrar:conocimientoRegistrar.html.twig";
                break;
                
            case "8": //Clientes-Empresa
                foreach($arrParametros as $rowParametro) {
                    $entityId=$rowParametro->entityId;
                    $clienteId=$entityId;
                }
                if ($clienteId=="0") {
                    $clienteEntity = new empresa();
                    $clienteEntity->setEmpresaId($empId);
                } else {
                    $clienteEntity = $em->getRepository('GtSistemaBundle:empresa')->find($clienteId); 
                }
                $entity=$clienteEntity;                                
                $form = $this->createForm(new ClienteType($em, $empId), $clienteEntity);
                $formParametros["clienteId"]=$clienteId;
                $formView="Registrar:clienteRegistrar.html.twig";
                
                break;
                
            case "9": //Curso
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $cursoId=$entityId;
                    
                    if (key_exists("dataModulo", $rowParametro)) {
                        $jsnModulo=$request->get("tbxModulo");
                        $arrModulo = json_decode($jsnModulo);
                    }
                }
                
                echo "<pre>";
                echo print_r($arrModulo);
                echo "</pre>";
                
//                foreach($arrParametros as $rowParametro) {
//                    $entityId=$rowParametro->entityId;
//                    $cursoId=$entityId;
//                }                
                
                if ($cursoId=="0") {
                    $cursoEntity = new curso();
                    $cursoEntity->setEmpresaId($empId);
                } else {
                    $cursoEntity = $em->getRepository('GtSistemaBundle:curso')->find($cursoId); 
                }
                $entity=$cursoEntity;                                
                $form = $this->createForm(new CursoType($em, $empId), $cursoEntity);
                $formParametros["cursoId"]=$cursoId;
                $formView="Registrar:cursoRegistrar.html.twig";
                
                break;          
            case "7": //Pregunta
                
                $competenciaId="0";
                $conocimientoId="0";

                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $preguntaId=$entityId;                            
                    $preguntaTipoId=$rowParametro->preguntaTipoId;
                }
                
                
                if ($preguntaId>0) {
//                    $entityPregunta=$this->getDoctrine()
//                        ->getManager()->getRepository('GtSistemaBundle:pregunta')
//                        ->find($preguntaId);
//
//                    $preguntaTipoId=$entityPregunta->getPreguntaTipoId();

                    switch ($preguntaTipoId) {               
                        case "1":
                            $preguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:preguntaCompetencia')->find($preguntaId);
                            
                            if (count($preguntaCompetenciaEntity)>0) {
                                //echo "preg.".$preguntaId." comp:".$competenciaId."<br>";
                                $competenciaId=$preguntaCompetenciaEntity->getCompetenciaId();
                                if ($competenciaId=="") {
                                    $competenciaId="0";        
                                }
                            } else {
                                $preguntaCompetenciaEntity=new preguntaCompetencia();    
                            }
                        case "2":
                            $preguntaConocimientoEntity=$em->getRepository('GtSistemaBundle:preguntaConocimiento')->find($preguntaId);

                            if (count($preguntaConocimientoEntity)>0) {
                                //echo "preg.".$preguntaId." comp:".$competenciaId."<br>";
                                $conocimientoId=$preguntaConocimientoEntity->getConocimientoId();
                                if ($conocimientoId=="") {
                                    $conocimientoId="0";        
                                }
                            } else {

                                $preguntaConocimientoEntity=new preguntaConocimiento();    
                            }                    
                            break;
                    }
                    //echo "preg.".$preguntaId." comp:".$competenciaId;
                    //echo "competencia Id".$competenciaId."<br>";
                    //$form = $this->createForm(new MaestroCiudadType(), $bco);
                } else {
                    switch ($preguntaTipoId) {
                        case "1":                            
                            $preguntaCompetenciaEntity=new preguntaCompetencia();                                                
                            break;
                        case "2":                            
                            $preguntaConocimientoEntity=new preguntaConocimiento();                    
                            break;                    
                    }
                    //$entityPregunta=new preguntaCompetencia();   
                    //$entityPregunta->setEmpresaId($empId);
                    //$entityPregunta->setPreguntaTipoId($preguntaTipoId);
                }
                switch ($preguntaTipoId) {
                    case "1":                            
                        $form = $this->createForm(new PreguntaCompetenciaType($em, $empId, $competenciaId), $preguntaCompetenciaEntity);
                        $entity=$preguntaCompetenciaEntity;
                        $formView="Registrar:preguntaRegistrar.html.twig";
                        break;
                    case "2":                            
                        $form = $this->createForm(new PreguntaConocimientoType($em, $empId, $competenciaId), $preguntaConocimientoEntity);
                        $entity=$preguntaConocimientoEntity;
                        $formView="Registrar:preguntaConocimientoRegistrar.html.twig";
                        break;
                }
                
                
                $formParametros["preguntaId"]=$preguntaId;
                $formParametros["preguntaTipoId"]=$preguntaTipoId;
                $formParametros["competenciaId"]=$competenciaId;
                $formParametros["conocimientoId"]=$conocimientoId;
                
                
                
                break;
            case "11": //Evaluaciones
                foreach($arrParametros as $rowParametro) {                    
                    $entityId=$rowParametro->entityId;
                    $evaluacionId=$entityId;
                    
//                    if (key_exists("dataModulo", $rowParametro)) {
//                        $jsnModulo=$request->get("tbxModulo");
//                        $arrModulo = json_decode($jsnModulo);
//                    }
                }
                
//                echo "<pre>";
//                echo print_r($arrModulo);
//                echo "</pre>";
                
//                foreach($arrParametros as $rowParametro) {
//                    $entityId=$rowParametro->entityId;
//                    $evaluacionId=$entityId;
//                }                
                
                if ($evaluacionId=="0") {
                    $evaluacionEntity = new evaluacion();
                    $evaluacionEntity->setEmpresaId($empId);
                } else {
                    $evaluacionEntity = $em->getRepository('GtSistemaBundle:evaluacion')->find($evaluacionId); 
                }
                $entity=$evaluacionEntity;                                
                $form = $this->createForm(new EvaluacionType($em, $empId), $evaluacionEntity);
                $formParametros["evaluacionId"]=$evaluacionId;
                $formView="Registrar:evaluacionRegistrar.html.twig";
                
                break;          
        }
                
        $parametrosProcess["form"]=$form;
        $parametrosProcess["request"]=$request;
        $parametrosProcess["entity"]=$entity;
        
        $formParametros["entityId"]=$entityId;
        if ($this->formProcess($parametrosProcess)) {
            $formParametros["entityId"]=$entity->getId();
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            
                    
            switch ($maeTipoId) {
            case "3": //Compentecia
                
//                echo "<pre>";
//                echo print_r($arrActividadClave);
//                echo "</pre>";
                                    
                $competenciaId=$entity->getId();
                $formParametros["competenciaId"]=$competenciaId;
                $qb = $em->createQueryBuilder();
                $query = $qb->delete("GtSistemaBundle:actividadClave", "a")
                            ->where("a.competenciaId = '".$competenciaId."'")
                            ->getQuery();
                $query->execute();
                    
                if (count($arrActividadClave)>=1) {
                    

                  
                    
                    foreach($arrActividadClave as $rowActividadClave) {                
                        
                        $actividadClaveNombre=$rowActividadClave->actividadClaveNombre;
                        if ($actividadClaveNombre!="") {
                            //echo $actividadClaveNombre;
                            $actividadClaveEntity = new actividadClave();
                            $actividadClaveEntity->setCompetenciaId($competenciaId);
                            $actividadClaveEntity->setActividadClaveNombre($actividadClaveNombre);
                            $em->persist($actividadClaveEntity);
                            $em->flush();
                        }
                    }

                }
                break;
            case "6":  //Conocimiento
                
                $conocimientoId=$entity->getId();
                    $formParametros["conocimientoId"]=$conocimientoId;
                    $qb = $em->createQueryBuilder();
                    $query = $qb->delete("GtSistemaBundle:aprendizaje", "a")
                                ->where("a.conocimientoId = '".$conocimientoId."'")
                                ->getQuery();
                    $query->execute();
                    
                    
                if (count($arrAprendizaje)>=1) {
                    

                    foreach($arrAprendizaje as $rowAprendizaje) {
                        $aprendizajeNombre=$rowAprendizaje->aprendizajeNombre;
                        if ($aprendizajeNombre!="") {                        
                            $aprendizajeEntity = new aprendizaje();
                            $aprendizajeEntity->setConocimientoId($conocimientoId);
                            $aprendizajeEntity->setAprendizajeNombre($aprendizajeNombre);
                            $em->persist($aprendizajeEntity);
                            $em->flush();
                        }
                    }
                }
                break;
                         
            case "7": //Pregunta
                
                
                switch ($preguntaTipoId) {
                    case "1":
                        $competenciaId=$form->get("competenciaId")->getData();
                        break;
                    case "2":
                        $conocimientoId=$form->get("conocimientoId")->getData();
                        break;
                }
            
                $formParametros["competenciaId"]=$competenciaId;
                $formParametros["conocimientoId"]=$conocimientoId;
                
                switch ($preguntaTipoId) {
                    case "1":
                        $preguntaId=$entity->getId();
                        $arrFind=array('preguntaId'=>$preguntaId);
                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}
                        $em->flush();
                
                
                        //$preguntaCompetenciaEntity->setPregunta($entityPregunta);
                        //$preguntaCompetenciaEntity->setPreguntaId($preguntaId);
                        $preguntaCompetenciaEntity->setCompetenciaId($competenciaId);
                        $em->persist($preguntaCompetenciaEntity);
                        $em->flush();
                        break;
                    case "2":
                        $preguntaId=$entity->getId();
                        $arrFind=array('preguntaId'=>$preguntaId);
                        $entityPreguntaAprendizaje = $em->getRepository("GtSistemaBundle:preguntaAprendizaje")->findBy($arrFind);
                        foreach ($entityPreguntaAprendizaje as $value) {$em->remove($value);}
                        $em->flush();
                
                        //$preguntaConocimientoEntity->setPregunta($entityPregunta);
                        $preguntaConocimientoEntity->setConocimientoId($conocimientoId);
                        $em->persist($preguntaConocimientoEntity);
                        $em->flush();
                        
                         
                         
                        break;
                }
              
                $formParametros["preguntaId"]=$preguntaId;
                
                //$competenciaId=$entityPregunta->getCompetenciaId();
                //$conocimientoId=$entityPregunta->getConocimientoId();
                                                                             
               // $competenciaId=1;
                if ($competenciaId>0) {                    
                    $actividadClaveIds=$request->get("tbxActividadClaveIds");
                    if ($actividadClaveIds!="") {
                        $arrActividadClave=explode(",",$actividadClaveIds);
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
//                        $arrFind=array('competenciaId'=>$competenciaId, 'preguntaId'=>$preguntaId);
//                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
//                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrActividadClave)-1;$i++) {
                            $preguntaActividadClave=new preguntaActividadClave();                        
                            $preguntaActividadClave->setPreguntaId($preguntaId);
                            //$preguntaActividadClave->setCompetenciaId($competenciaId);
                            $preguntaActividadClave->setActividadClaveId($arrActividadClave[$i-1]);
                            $em->persist($preguntaActividadClave);
                            $em->flush();
                        } 
                    } 
                }
                
                if ($conocimientoId>0) {                    
                    $aprendizajeIds=$request->get("tbxAprendizajeIds");                    
                    if ($aprendizajeIds!="") {
                        $arrAprendizaje=explode(",",$aprendizajeIds);
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
//                        $arrFind=array('conocimientoId'=>$conocimientoId, 'preguntaId'=>$preguntaId);
//                        $entityPreguntaAprendizaje = $em->getRepository("GtSistemaBundle:preguntaAprendizaje")->findBy($arrFind);
//                        foreach ($entityPreguntaAprendizaje as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrAprendizaje)-1;$i++) {
                            
                            $preguntaAprendizaje=new preguntaAprendizaje();                        
                            $preguntaAprendizaje->setPreguntaId($preguntaId);
                            //$preguntaAprendizaje->setConocimientoId($conocimientoId);
                            $preguntaAprendizaje->setAprendizajeId($arrAprendizaje[$i-1]);
                            $em->persist($preguntaAprendizaje);
                            $em->flush();
                        } 
                    } 
                }
                
                
                break;
            case "8": //Clientes-Empresa
                $empresaId=$entity->getId();
                $empresaContactoCorreo=$entity->getEmpresaContactoCorreo();
                $empresaContactoNombre=$entity->getEmpresaContactoNombre();
                $userManager = $this->container->get('fos_user.user_manager');                                                                                                                        
                //$arrBuscaUsuario=array('username'=>$empresaContactoCorreo);

                //$usuarioEntity = $em->getRepository('GtSistemaBundle:usuario')->findOneBy($arrBuscaUsuario);
                //$usuarioEntity = $em->getRepository('GtUserBundle:User')->findOneBy($arrBuscaUsuario);
                $email_exist=$userManager->findUserByEmail($empresaContactoCorreo);

                if(!$email_exist){                            

                    $user = $userManager->createUser();
                    $empresaContactoNombre  = str_replace(" ", "", $empresaContactoNombre);                            
                    $user->setUsername($empresaContactoNombre);
                    $user->setEmail($empresaContactoCorreo);
                    $user->setPlainPassword('test');
                    $user->setEnabled(true);
                    $userManager->updateUser($user, true);
                    $usuarioId=$user->getId();

                    $arrBuscaEmpresaUsuario=array("empresaId"=>$empresaId, "usuarioId"=>$usuarioId);
                    $empresaUsuarioData=$em->getRepository('GtSistemaBundle:empresaUsuario')->findOneBy($arrBuscaEmpresaUsuario);

                    if (count($empresaUsuarioData)==0) {
                        $empresaUsuario = new empresaUsuario();
                        $empresaUsuario->setEmpresaId($empresaId);  
                        $empresaUsuario->setUsuarioId($usuarioId);        
                        $empresaUsuario->setEmpresaUsuarioDefault(1);
                        $em->persist($empresaUsuario);                
                        $em->flush();
                    }                                

                }
                break;
            case "9": //curso
                
                if (count($arrModulo)>=1) {
                    $cursoId=$entity->getId();
                    $formParametros["cursoId"]=$cursoId;
                    $qb = $em->createQueryBuilder();
                    $query = $qb->delete("GtSistemaBundle:modulo", "a")
                                ->where("a.cursoId = '".$cursoId."'")
                                ->getQuery();
                    $query->execute();

                    foreach($arrModulo as $rowModulo) {                
                        $moduloCodigo=$rowModulo->moduloCodigo;
                        $moduloNombre=$rowModulo->moduloNombre;
                        if ($moduloNombre!="") {
                            
                            $moduloEntity = new modulo();
                            $moduloEntity->setCursoId($cursoId);
                            $moduloEntity->setModuloCodigo($moduloCodigo);
                            $moduloEntity->setModuloNombre($moduloNombre);
                            $em->persist($nombreEntity);
                            $em->flush();
                        }
                    }

                }
                
                break;
                
            }
            
        }
        
        
        
        //$formView="Mae:".$maeNombre."Registrar.html.twig";        
        $formParametros['form'] = $form->createView();
        $formParametros["winParent"]=$winParent;
        return $this->render('GtSistemaBundle:'.$formView, $formParametros);
                         
    }
    
    public function maestroBorrarAction($maeParametros) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empId = "162";//$request->getSession()->get('usuarioEmpresaId');
        //$winParent=$request->get("winParent");
        $arrParametros = json_decode($maeParametros);
                        
        foreach($arrParametros as $rowParametro) {            
            $maeTipoId  =$rowParametro->maeTipoId;
            $maeNombre  =$rowParametro->maeNombre;
            //$maeRegistroId  =$rowParametro->maeRegistroId;            
            $winParent  =$rowParametro->winParent;
            if (key_exists("competenciaId", $rowParametro)) {                                       
                $parametrosForm["competenciaId"]=$rowParametro->competenciaId;
            }
            
            if (key_exists("conocimientoId", $rowParametro)) {                                       
                $parametrosForm["conocimientoId"]=$rowParametro->conocimientoId;
            }
            
        }

        $maeRegistroId=$request->get("maeRegistroId");
        
        $entity=$em->getRepository('GtSistemaBundle:'.$maeNombre)->find($maeRegistroId);
        $em->remove($entity);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Registro borrado con exito!');
     
        $formView="Registrar:".$maeNombre.".html.twig";
        $parametrosForm["maeTipoId"]=$maeTipoId;
        $parametrosForm["winParent"]=$winParent;
        
        return $this->render('GtSistemaBundle:'.$formView, $parametrosForm);  
    }
    
    protected function formProcess($parametrosProcess) {
        $em = $this->getDoctrine()->getManager();
        $form=$parametrosProcess["form"];
        $request=$parametrosProcess["request"];
        $entity=$parametrosProcess["entity"];
//        $empId=$parametrosProcess["empresaId"];
//        $actividadClaveEntity=$parametrosProcess["actividadClaveId"];
//        $actividadClaveTipoId=$parametrosProcess["actividadClaveTipoId"];                
        
        //$request=$parametros["request"];
        //$form=$parametros["form"];
        //$entity=$parametros["entity"];
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                                               
                $em->persist($entity);
                $em->flush();
                return true;
            }
        }        
        return false;
    }
    
}
