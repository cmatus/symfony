<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\CompetenciaType;
use Gt\SistemaBundle\Entity\competencia;

class CompetenciaController extends Controller
{
    public function competenciaAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:competencia.html.twig', $param);        
    }
    
    public function competenciaRegistrarAction($competenciaId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");

        if ($competenciaId=="0") {
            $competenciaEntity=new competencia();   
        } else {
            $competenciaEntity=$em->getRepository('GtSistemaBundle:competencia')->find($competenciaId);
        }
        $form = $this->createForm(new CompetenciaType(), $competenciaEntity);
        $guardado="0";
        if ($request->getMethod() == 'POST') {            
            $form->bind($request);
            if ($form->isValid()) {
                $competenciaEntity->setEmpresaId($empresaId);
                $em->persist($competenciaEntity);
                $em->flush();
                $guardado="1";
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }
            
        } 
        $param['form'] = $form->createView();
        $param["guardado"]=$guardado;
        return $this->render('GtSistemaBundle:Registrar:competenciaRegistrar.html.twig', $param);
        
    }
    
    public function competenciaBorrarAction($competenciaId)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        $competenciaEntity=$em->getRepository('GtSistemaBundle:competencia')->find($competenciaId);
        $em->remove($competenciaEntity);
        $em->flush();        
        $this->get('session')->getFlashBag()->add('notice', 'Registro eliminado con exito!' );
        $param["empresaId"]=$empresaId;
        return $this->render('GtSistemaBundle:Registrar:competencia.html.twig', $param);
    }
    
             
    
    public function competenciaTablaAction()
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:competencia ', 'a')
            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
        
    }
    
        
    
}
