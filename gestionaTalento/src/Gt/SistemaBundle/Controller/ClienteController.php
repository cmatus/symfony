<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\ClienteType;
use Gt\SistemaBundle\Entity\cliente;

class ClienteController extends Controller
{
    
    public function clienteAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:cliente.html.twig', $param);   
        
    }
    
    public function clienteRegistrarAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        
        $clienteId=$request->get("tbxClienteId");
        
       // $idCompetencia=$request->get("id");
        
        $entityCliente=new cliente();   
        $form = $this->createForm(new ClienteType(), $entityCliente);
        //echo "method: ".$request->getMethod();
        if ($request->getMethod() == 'POST' && $clienteId=="") {            
            //$form->bind($request);
            $form->handleRequest($request);
 
            $clienteId=$form->get('id')->getData();
   
            if ($clienteId>0) {
                $entityCliente=$this->getDoctrine()
                    ->getManager()->getRepository('GtSistemaBundle:cliente')
                    ->find($clienteId);                                
            } 
            
            $form = $this->createForm(new ClienteType(), $entityCliente);
            $form->bind($request);
            if ($form->isValid()) {
                //echo "Grabando";
                $em->persist($entityCliente);
                $em->flush();
                $aviso = "Datos registrados con exito.";
                //$param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                //return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }
            
        } else {               
            if ($clienteId!="") {                   
                $entityCliente=$em->getRepository('GtSistemaBundle:cliente')->find($clienteId);
                $em->remove($entityCliente);
                $em->flush();
            }
        }
         
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:clienteRegistrar.html.twig', $param);
        
    }
    
    public function clienteBorrarAction($clienteId)
    {
        
        $em = $this->getDoctrine()->getManager();
        $entityCliente=$em->getRepository('GtSistemaBundle:cliente')->find($clienteId);
        $em->remove($entityCliente);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $entityCliente=new cliente();   
        $form = $this->createForm(new ClienteType(), $entityCliente);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:cliente.html.twig', $param);
    }
    
    public function registrarClienteDatosGrabarAction() {
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
    
    public function clienteTablaAction()
    {          
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();        
        $empresaId = $session->get("empresaId");
        
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
         $query = $em->createQueryBuilder()
            ->select("a")
            ->from('GtSistemaBundle:empresa ', 'a');            
        $arrayData=$query->getQuery()->getArrayResult();
        return new JsonResponse($arrayData);        
    }                
}
