<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\ConocimientoType;
use Gt\SistemaBundle\Form\AprendizajeType;
use Gt\SistemaBundle\Entity\conocimiento;
use Gt\SistemaBundle\Entity\aprendizaje;

class ConocimientoController extends Controller
{
    
    public function conocimientoAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:conocimiento.html.twig', $param);        
    }
    
    public function conocimientoRegistrarAction($conocimientoId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        if ($conocimientoId=="0") {
            $conocimientoEntity=new conocimiento();   
        } else {
            $conocimientoEntity=$em->getRepository('GtSistemaBundle:conocimiento')->find($conocimientoId);
        }
        $form = $this->createForm(new ConocimientoType(), $conocimientoEntity);        
        $guardado="0";
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {                
                $conocimientoEntity->setEmpresaId($empresaId);
                $em->persist($conocimientoEntity);
                $em->flush();
                $guardado="0";
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }
        }         
        $param['form'] = $form->createView();
        $param["guardado"]=$guardado;
        return $this->render('GtSistemaBundle:Registrar:conocimientoRegistrar.html.twig', $param);        
    }
    
    public function conocimientoBorrarAction($conocimientoId)
    {
        //echo "id:".$conocimientoId."<br>";
        $em = $this->getDoctrine()->getManager();
        $conocimientoEntity=$em->getRepository('GtSistemaBundle:conocimiento')->find($conocimientoId);
        $em->remove($conocimientoEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $conocimientoEntity=new conocimiento();   
        $form = $this->createForm(new ConocimientoType(), $conocimientoEntity);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:conocimiento.html.twig', $param);
    }
    
  
    
    public function conocimientoTablaAction()
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:conocimiento ', 'a')
            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
  
    }
            
    public function aprendizajeAction($conocimientoId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["conocimientoId"]=$conocimientoId;        
        return $this->render('GtSistemaBundle:Registrar:aprendizaje.html.twig', $param);        
    }
    
    public function aprendizajeTablaAction($conocimientoId)
    {           
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:aprendizaje ', 'a')
            ->where('a.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
    }
 
    public function aprendizajeRegistrarAction($conocimientoId, $aprendizajeId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        if ($aprendizajeId=="0") {
            $aprendizajeEntity=new aprendizaje();   
        }   else {
            $aprendizajeEntity=$em->getRepository('GtSistemaBundle:aprendizaje')->find($aprendizajeId);
        }
        $guardado="0";
        $form = $this->createForm(new AprendizajeType(), $aprendizajeEntity);
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {
                $aprendizajeEntity->setConocimientoId($conocimientoId);
                $em->persist($aprendizajeEntity);
                $em->flush();
                $guardado="1";                
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }            
        }
         
        $param['form'] = $form->createView();
        $param["guardado"]=$guardado;
        return $this->render('GtSistemaBundle:Registrar:aprendizajeRegistrar.html.twig', $param);
    }
    
}
