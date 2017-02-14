<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\EmpresaType;
use Gt\SistemaBundle\Entity\empresa;
use Gt\SistemaBundle\Entity\empresaUsuario;


class EmpresaController extends Controller
{
    
    public function empresaAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
        
        $param["empresaId"]=$empresaId;        
        return $this->render('GtSistemaBundle:Registrar:empresa.html.twig', $param);   
        
    }
    
    public function empresaRegistrarAction($empresaId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        
        
        if ($empresaId=="0") {
            $empresaEntity=new empresa();   
        } else {
            $empresaEntity=$em->getRepository('GtSistemaBundle:empresa')->find($empresaId);  
        }
        
        $form = $this->createForm(new EmpresaType(), $empresaEntity);
        //echo "method: ".$request->getMethod();
        if ($request->getMethod() == 'POST') {            
         
            $form->bind($request);
            if ($form->isValid()) {
                //echo "Grabando";
                $em->persist($empresaEntity);
                $em->flush();
                $aviso = "Datos registrados con exito.";
                echo "acaaa";
                
                $empresaId=$empresaEntity->getId();
                $empresaContactoCorreo=$empresaEntity->getEmpresaContactoCorreo();
                $empresaContactoNombre=$empresaEntity->getEmpresaContactoNombre();
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
                } else {
                    $usuarioId=$email_exist->getId();
                }
                
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
            
        }          
        $param['form'] = $form->createView();
        return $this->render('GtSistemaBundle:Registrar:empresaRegistrar.html.twig', $param);        
    }
    
    public function empresaBorrarAction($empresaId)
    {
        
        $em = $this->getDoctrine()->getManager();
        $empresaEntity=$em->getRepository('GtSistemaBundle:empresa')->find($empresaId);
        $em->remove($empresaEntity);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $empresaEntity=new empresa();   
        $form = $this->createForm(new EmpresaType(), $empresaEntity);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:empresa.html.twig', $param);
    }
    
       
    public function empresaTablaAction()
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
