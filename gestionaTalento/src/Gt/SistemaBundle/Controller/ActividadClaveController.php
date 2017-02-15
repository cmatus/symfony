<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\ActividadClaveType;
use Gt\SistemaBundle\Form\CriterioType;
use Gt\SistemaBundle\Entity\actividadClave;
use Gt\SistemaBundle\Entity\criterio;

class ActividadClaveController extends Controller
{
    
    public function actividadClaveAction($competenciaId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["competenciaId"]=$competenciaId;        
        return $this->render('GtSistemaBundle:Registrar:actividadClave.html.twig', $param);        
    }
    
    public function actividadClaveRegistrarAction($competenciaId, $actividadClaveId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        if ($actividadClaveId=="0") {
            $actividadClaveEntity=new actividadClave();   
        }   else {
            $actividadClaveEntity=$em->getRepository('GtSistemaBundle:actividadClave')->find($actividadClaveId);
        }
        $guardado="0";
        $form = $this->createForm(new ActividadClaveType(), $actividadClaveEntity);
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {
                $actividadClaveEntity->setCompetenciaId($competenciaId);
                $em->persist($actividadClaveEntity);
                $em->flush();
                $guardado="1";                
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }            
        }
         
        $param['form'] = $form->createView();
        $param["guardado"]=$guardado;
        return $this->render('GtSistemaBundle:Registrar:actividadClaveRegistrar.html.twig', $param);
    }
    
    public function actividadClaveBorrarAction($idActividadClave)
    {
        //echo "id:".$idActividadClave."<br>";
        $em = $this->getDoctrine()->getManager();
        $actividadClaveEntity=$em->getRepository('GtSistemaBundle:actividadClave')->find($idActividadClave);
        $em->remove($actividadClaveEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $actividadClaveEntity=new actividadClave();   
        $form = $this->createForm(new ActividadClaveType(), $actividadClaveEntity);
        
        $param['form'] = $form->createView();       
        return $this->render('GtSistemaBundle:Registrar:actividadClave.html.twig', $param);
    }
    
    public function actividadClaveTablaAction($competenciaId)
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        //$arrayData = $em->getRepository('GtSistemaBundle:actividadClave')->findByCompetenciaId($competenciaId);
       
        $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:actividadClave ', 'a')
            ->where('a.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
                 
//         $query = $em->createQueryBuilder()
//            ->select("a.id,"
//                    . "DATE_FORMAT(a.libroImportacionFecha, '%Y-%m-%d %H:%i') as libroImportacionFecha,"
//                    . "a.libroImportacionArchivoNombre,"
//                    . "a.libroImportacionDocumentoAceptado,"
//                    . "a.libroImportacionDocumentoRechazado,"
//                    . "a.libroImportacionEstado,"
//                    . "DATE_FORMAT(a.libroImportacionEstadoFecha, '%Y-%m-%d %H:%i') as libroImportacionEstadoFecha")
//            ->from('FacturaBundle:Lib\\libroImportacion ', 'a')
//            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId)
//            ->andWhere('a.operacionId = :operacionId')->setParameter('operacionId', $operacionId)
//            //->andWhere('a.libroAnio = :libroAnio')->setParameter('libroAnio', $libroAnio)
//            ->andWhere('a.libroImportacionPeriodoContable = :libroPeriodoContable')->setParameter('libroPeriodoContable', $libroPeriodoContable);
//
//        //if ($libroId!="") {
//        
//        $arrayData=$query->getQuery()->getArrayResult();   
        
        
        
        
//        $arrayData = $this->getDoctrine()
//            ->getRepository('GtSistemaBundle:actividadClave')
//            ->createQueryBuilder('c')
//            ->select('c')
//            ->getQuery()
//            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
//         ;
 
       
    
    }
    
    
    public function criterioAction($actividadClaveId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["actividadClaveId"]=$actividadClaveId;        
        return $this->render('GtSistemaBundle:Registrar:criterio.html.twig', $param);        
    }
    
        
    public function criterioTablaAction($actividadClaveId)
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        //$arrayData = $em->getRepository('GtSistemaBundle:actividadClave')->findByCompetenciaId($competenciaId);
       
        $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:criterio ', 'a')
            ->where('a.actividadClaveId = :actividadClaveId')->setParameter('actividadClaveId', $actividadClaveId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
        
    }
    
    public function criterioRegistrarAction($actividadClaveId, $criterioId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        //$idActividadClave=$request->get("tbxIdActividadClave");
        
        if ($criterioId=="0") {
            $criterioEntity=new criterio();   
        }   else {
            $criterioEntity=$em->getRepository('GtSistemaBundle:criterioEntity')->find($criterioId);
        }
        
        $form = $this->createForm(new CriterioType(), $criterioEntity);
        $guardado="0"; 
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {
                $criterioEntity->setActividadClaveId($actividadClaveId);
                $em->persist($criterioEntity);
                $em->flush();
                $guardado="1";                
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }            
        }
        
        $param['form'] = $form->createView();
        $param['guardado'] = $guardado;
        return $this->render('GtSistemaBundle:Registrar:criterioRegistrar.html.twig', $param);
    }
    
}
