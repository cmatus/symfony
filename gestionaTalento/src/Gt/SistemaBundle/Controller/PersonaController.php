<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\PersonaType;
use Gt\SistemaBundle\Entity\persona;

class PersonaController extends Controller
{
    
    public function personaAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:persona.html.twig', $param);        
    }
    
    public function personaRegistrarAction($personaId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        if ($personaId=="0") {
            $personaEntity=new persona();   
        } else {
            $personaEntity=$em->getRepository('GtSistemaBundle:persona')->find($personaId);            
        }
        $form = $this->createForm(new PersonaType($em, $empresaId), $personaEntity);
        if ($request->getMethod() == 'POST') {            
         
            $form->bind($request);
            if ($form->isValid()) {
                $personaEntity->setEmpresaId($empresaId);
                $em->persist($personaEntity);
                $em->flush();
                $aviso = "Datos registrados con exito.";
                $this->get('session')->getFlashBag()->add('notice', 'Registro guardado con exito!' );
            }                    
        }
         
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:personaRegistrar.html.twig', $param);        
    }
    
    public function personaBorrarAction($personaId)
    {
        
        $em = $this->getDoctrine()->getManager();
        $personaEntity=$em->getRepository('GtSistemaBundle:persona')->find($personaId);
        $em->remove($personaEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $personaEntity=new persona();   
        $form = $this->createForm(new PersonaType($em, $empresaId), $personaEntity);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:persona.html.twig', $param);
    }
    
   
    
    public function personaTablaAction()
    {                   
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a.id,"
                    ."a.empresaId,"
                    ."a.perfilId,"
                    ."a.personaNombre,"
                    ."a.personaCorreo,"
                    ."b.perfilNombre")
            ->from('GtSistemaBundle:persona ', 'a')
            ->innerJoin('GtSistemaBundle:perfil', 'b', 'WITH', 'b.id = a.perfilId')     
            ->where('a.empresaId = :empresaId')->setParameter('empresaId', $empresaId);                       
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);
        

    }
    
        
    
}
