<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\ClientePerfilType;

use Gt\SistemaBundle\Entity\clientePerfil;
use Gt\SistemaBundle\Entity\clientePerfilCompetencia;
use Gt\SistemaBundle\Entity\clientePerfilConocimiento;


class ClientePerfilController extends Controller
{
    
    public function clientePerfilRegistrarAction()
    {
        
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        
        $idClientePerfil=$request->get("tbxIdClientePerfil");
        
        $entityClientePerfil=new clientePerfil();   
        $form = $this->createForm(new ClientePerfilType(), $entityClientePerfil);
        
        if ($request->getMethod() == 'POST' && $idClientePerfil=="") {            
        
            $form->handleRequest($request);
            $idClientePerfil=$form->get('id')->getData();

            if ($idClientePerfil>0) {
                $entityClientePerfil=$this->getDoctrine()
                    ->getManager()->getRepository('GtSistemaBundle:clientePerfil')
                    ->find($idClientePerfil);
            } 
            
            $form = $this->createForm(new ClientePerfilType(), $entityClientePerfil);
            $form->bind($request);
            if ($form->isValid()) {
                //echo "Grabando";
                $em->persist($entityClientePerfil);
                $em->flush();
                $clientePerfilId=$entityClientePerfil->getId();
                
                $arrFind=array('clientePerfilId'=>$clientePerfilId);
                $entityClientePerfilCompetencia = $em->getRepository("GtSistemaBundle:clientePerfilCompetencia")->findBy($arrFind);
                foreach ($entityClientePerfilCompetencia as $value) {$em->remove($value);}

                $arrFind=array('clientePerfilId'=>$clientePerfilId);
                $entityClientePerfilConocimiento = $em->getRepository("GtSistemaBundle:clientePerfilConocimiento")->findBy($arrFind);
                foreach ($entityClientePerfilConocimiento as $value) {$em->remove($value);}
                                
                $competenciaIds=$request->get("tbxCompetenciaIds");
                
                if ($competenciaIds!="") {
                    $arrCompetencia=explode(",",$competenciaIds);

                    for ($i=1;$i<=count($arrCompetencia)-1;$i++) {
                        $clientePerfilCompetencia=new clientePerfilCompetencia();                        
                        $clientePerfilCompetencia->setPerfilId($clientePerfilId);
                        $clientePerfilCompetencia->setCompetenciaId($arrCompetencia[$i-1]);                        
                        $em->persist($clientePerfilCompetencia);
                        $em->flush();
                    } 
                } 
                
                $conocimientoIds=$request->get("tbxConocimientoIds");
                if ($conocimientoIds!="") {
                    $arrConocimiento=explode(",",$conocimientoIds);

                    for ($i=1;$i<=count($arrConocimiento)-1;$i++) {
                        $clientePerfilConocimiento=new clientePerfilConocimiento();                        
                        $clientePerfilConocimiento->setPerfilId($clientePerfilId);
                        $clientePerfilConocimiento->setConocimientoId($arrConocimiento[$i-1]);                        
                        $em->persist($clientePerfilConocimiento);
                        $em->flush();
                    } 
                }                 
                    
                    
                $aviso = "Datos registrados con exito.";
                //$param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                //return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }
            
        } else {
                
                if ($idClientePerfil!="") {
                    $entityClientePerfil=$em->getRepository('GtSistemaBundle:clientePerfil')->find($idClientePerfil);
                    $em->remove($entityClientePerfil);
                    $em->flush();
                }
        }
        
         
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:clientePerfil.html.twig', $param);
        
    }
    
    public function clientePerfilBorrarAction($idClientePerfil)
    {
        //echo "id:".$idClientePerfil."<br>";
        $em = $this->getDoctrine()->getManager();
        $entityClientePerfil=$em->getRepository('GtSistemaBundle:clientePerfil')->find($idClientePerfil);
        $em->remove($entityClientePerfil);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $entityClientePerfil=new clientePerfil();   
        $form = $this->createForm(new ClientePerfilType(), $entityClientePerfil);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:clientePerfil.html.twig', $param);
    }
    
    public function clientePerfilDatosGrabarAction() {
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
    
    public function clientePerfilTablaAction()
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$arrayData = $em->getRepository('GtSistemaBundle:clientePerfil')->findBy(array("idEmpresa"=>"1"));        
        $arrayData = $em->getRepository('GtSistemaBundle:clientePerfil')->findAll();
     
        $response = new JsonResponse();
        
        $arrayData = $this->getDoctrine()
            ->getRepository('GtSistemaBundle:clientePerfil')
            ->createQueryBuilder('c')
            ->select('c')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
         ;
 
        return new JsonResponse($arrayData);
        
    }
    
    public function clientePerfilCompetenciaTablaAction($clientePerfilId)
    {           
        $em = $this->getDoctrine()->getManager();

        $response = new JsonResponse();
        
        $parametros=array("clientePerfilId"=>$clientePerfilId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:clientePerfil')->getListaCompetencia($parametros);
        
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    public function clientePerfilConocimientoTablaAction($clientePerfilId)
    {           
        $em = $this->getDoctrine()->getManager();

        $response = new JsonResponse();
        
        $parametros=array("clientePerfilId"=>$clientePerfilId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:clientePerfil')->getListaConocimiento($parametros);
        
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    
    
}
