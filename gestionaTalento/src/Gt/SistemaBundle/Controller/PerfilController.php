<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\PerfilType;
use Gt\SistemaBundle\Entity\perfil;
use Gt\SistemaBundle\Entity\perfilCompetencia;
use Gt\SistemaBundle\Entity\perfilConocimiento;

use Gt\SistemaBundle\Entity\clientePerfil;
use Gt\SistemaBundle\Entity\clientePerfilCompetencia;
use Gt\SistemaBundle\Entity\clientePerfilConocimiento;


class PerfilController extends Controller
{
    
    public function perfilAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param[""]="";        
        return $this->render('GtSistemaBundle:Registrar:perfil.html.twig', $param);        
    }
    
    public function perfilRegistrarAction($perfilId)
    {                
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        //$perfilId=$request->get("tbxIdPerfil");
        
       // $perfilId=$request->get("id");
        
        if ($perfilId=="0") {
            $perfilEntity=new perfil();   
        } else {
            $perfilEntity=$em->getRepository('GtSistemaBundle:perfil')->find($perfilId);
        }
        
        $form = $this->createForm(new PerfilType(), $perfilEntity);
        //echo "method: ".$request->getMethod();
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {                
                $perfilEntity->setEmpresaId($empresaId);
                $em->persist($perfilEntity);
                $em->flush();
                $perfilId=$perfilEntity->getId();
                
                $arrFind=array('perfilId'=>$perfilId);
                $perfilEntityCompetencia = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrFind);
                foreach ($perfilEntityCompetencia as $value) {$em->remove($value);}

                $arrFind=array('perfilId'=>$perfilId);
                $perfilEntityConocimiento = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrFind);
                foreach ($perfilEntityConocimiento as $value) {$em->remove($value);}
                                
                $competenciaIds=$request->get("tbxCompetenciaIds");
                
                if ($competenciaIds!="") {
                    $arrCompetencia=explode(",",$competenciaIds);
                    //echo  "competencias:". count($arrCompetencia);
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
                    //echo count($arrConocimiento);
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
                                                        
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
                //$param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                //return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }                    
        }
        
        $param["perfilId"]=$perfilId;
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:perfilRegistrar.html.twig', $param);
        
    }
    
    public function perfilBorrarAction($perfilId)
    {
        //echo "id:".$perfilId."<br>";
        $em = $this->getDoctrine()->getManager();
        $perfilEntity=$em->getRepository('GtSistemaBundle:perfil')->find($perfilId);
        $em->remove($perfilEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $perfilEntity=new perfil();   
        $form = $this->createForm(new PerfilType(), $perfilEntity);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:perfil.html.twig', $param);
    }
                     
    
    public function perfilTablaAction()
    {           
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:perfil ', 'a')
            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
        
    }
    
    public function perfilCompetenciaTablaAction($perfilId)
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $response = new JsonResponse();
        
        $parametros=array("empresaId"=>$empresaId,"perfilId"=>$perfilId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:perfil')->getListaCompetencia($parametros);
        
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    public function perfilConocimientoTablaAction($perfilId)
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $response = new JsonResponse();
        
        $parametros=array("empresaId"=>$empresaId,"perfilId"=>$perfilId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:perfil')->getListaConocimiento($parametros);
        
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    
    
}
