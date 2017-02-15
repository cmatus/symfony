<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\ClienteCompetenciaType;
use Gt\SistemaBundle\Entity\clienteCompetencia;

class ClienteCompetenciaController extends Controller
{
    public function clienteCompetenciaRegistrarAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        
        $idClienteCompetencia=$request->get("tbxIdClienteCompetencia");
        
       // $idClienteCompetencia=$request->get("id");
        
        $entityClienteCompetencia=new clienteCompetencia();   
        $form = $this->createForm(new ClienteCompetenciaType(), $entityClienteCompetencia);
        //echo "method: ".$request->getMethod();
        if ($request->getMethod() == 'POST' && $idClienteCompetencia=="") {            
            //$form->bind($request);
            $form->handleRequest($request);
            $idClienteCompetencia=$form->get('id')->getData();
            
            if ($idClienteCompetencia>0) {
                $entityClienteCompetencia=$this->getDoctrine()
                    ->getManager()->getRepository('GtSistemaBundle:clienteCompetencia')
                    ->find($idClienteCompetencia);
                
                //$form = $this->createForm(new MaestroCiudadType(), $bco);
            } 
            
            $form = $this->createForm(new ClienteCompetenciaType(), $entityClienteCompetencia);
            $form->bind($request);
            if ($form->isValid()) {
                //echo "Grabando";
                $em->persist($entityClienteCompetencia);
                $em->flush();
                $aviso = "Datos registrados con exito.";
            }
            
        } else {
               
                if ($idClienteCompetencia!="") {
                    
                    $entityClienteCompetencia=$em->getRepository('GtSistemaBundle:clienteCompetencia')->find($idClienteCompetencia);
                    $em->remove($entityClienteCompetencia);
                    $em->flush();
                }
        }
        
         
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:clienteCompetencia.html.twig', $param);
        
    }
    
    public function clienteCompetenciaBorrarAction($idClienteCompetencia)
    {
        //echo "id:".$idClienteCompetencia."<br>";
        $em = $this->getDoctrine()->getManager();
        $entityClienteCompetencia=$em->getRepository('GtSistemaBundle:clienteCompetencia')->find($idClienteCompetencia);
        $em->remove($entityClienteCompetencia);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $entityClienteCompetencia=new clienteCompetencia();   
        $form = $this->createForm(new ClienteCompetenciaType(), $entityClienteCompetencia);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:clienteCompetencia.html.twig', $param);
    }
    
    public function clienteCompetenciaDatosGrabarAction() {
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
    
    
    public function ciudadMantenedorDHXAction($id_ciudad=null , $accion=null )
    {
        $em = $this->getDoctrine()->getManager('fel');
        $request = $this->getRequest();
        $entidad_ciudad = new ciudad();
        $form = $this->createForm(new MaestroCiudadType(), $entidad_ciudad);

        $accion = $request->get('accion');
        $id_ciudad = $request->get('id_ciudad');

        $aviso = $request->get('aviso');
        $error = $request->get('error');
        switch ($accion) {
            case '1': // editar
                $bco = $this->getDoctrine()
                    ->getManager()->getRepository('FELSistemaBundle:ciudad')
                    ->find($this->getRequest()->get('id_ciudad'));
                
                $form = $this->createForm(new MaestroCiudadType(), $bco);
                if ($this->processForm($form, $bco, $request)) {
                    $aviso = "Registro modificado con exito.";
                    $accion = '-1';
                    $param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                    return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX', $param));
                }
                break;
            
            case '2': // eliminar
                $empresa = $em->getRepository('FELSistemaBundle:ciudad')->find($this->getRequest()->get('id_ciudad'));
                $em->remove($empresa);
                $em->flush();
                $error = "Registro eliminado con exito.";

                break;
            
            default: // crear
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
                    break;
                }
        }       
        $param = array( 
                        'form' => $form->createView(),
                        'id_ciudad' =>  $id_ciudad,
                        'accion' =>  $accion,
                        );     
        if ( strlen($aviso)>0 ){ $param['aviso']=$aviso; }
        if ( strlen($error)>0 ){ $param['error']=$error; }
        return $this->render('FELSistemaBundle:Maestro:maestroCiudadDHX.html.twig' , $param );
    }

    
    
    public function clienteCompetenciaTablaAction()
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$arrayData = $em->getRepository('GtSistemaBundle:clienteCompetencia')->findBy(array("idEmpresa"=>"1"));        
        $arrayData = $em->getRepository('GtSistemaBundle:clienteCompetencia')->findAll();
     
        $response = new JsonResponse();
        
        $arrayData = $this->getDoctrine()
            ->getRepository('GtSistemaBundle:clienteCompetencia')
            ->createQueryBuilder('c')
            ->select('c')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
         ;
 
        return new JsonResponse($arrayData);
    
    }
    
}
