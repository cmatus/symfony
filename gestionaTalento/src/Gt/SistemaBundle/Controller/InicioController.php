<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InicioController extends Controller
{
//    public function inicioAction($name)
//    {
//        return $this->render('GtSistemaBundle:Inicio:inicio.html.twig', array('name' => $name));
//    }        

    
    
    public function inicioAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        
        //echo "context:".$this->get('security.context')->getToken()->getUser()->getUsername(); 
        
        $userEntity = $em->getRepository('UserBundle:User')->findOneBy(array('username' => $this->get('security.context')->getToken()->getUser()->getUsername()));        
        $userId=$userEntity->getId();
                
        /*$sql = " 
                    SELECT e.* FROM empresa e 
                    WHERE e.id = (  
                                    SELECT eu.empresa_id
                                    FROM empresaUsuario eu 
                                    WHERE eu.usuario_id=$userId AND eu.empresaUsuarioDefault=1 LIMIT 1 
                                 ) 
                    " ;*/
            $sql=" SELECT A.id,  A.empresaRazonSocial, B.usuarioTipo_id
            FROM empresa A
            INNER JOIN empresaUsuario B ON A.id=B.empresa_id
            WHERE B.usuario_id=$userId AND B.empresaUsuarioDefault=1
            LIMIT 1";
            
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();
            $listaEmpresaUsuario = $stmt->fetchAll();
            if(count($listaEmpresaUsuario)==0){
                $parametros = array(
                    'mensaje'=>'El Usuario NO tiene empresa por defecto seleccionada.',
                    'mensajeTecnico'=>'En tabla empresaUsuario no tiene ninguna empresaUsuarioDefault=1.',
                );
                return $this->redirect($this->generateUrl('error_sistema', $parametros ));
            }
            foreach ($listaEmpresaUsuario as $emp) {
                $session->set('empresaId', $emp['id']);
                $session->set('empresaRazonSocial', $emp['empresaRazonSocial']);
                $session->set('usuarioTipoId', $emp['usuarioTipo_id']);
//                $session->set('usuarioEmpresaIdFEL', $emp['id']);
//                $session->set('usuarioEmpresaRut', $emp['empresaRut']);
//                $session->set('usuarioEmpresaRazonSocial', $emp['empresaRazonSocial']);
//                $session->set('usuarioEmpresaGiro', $emp['empresaGiro']);
//                $session->set('usuarioEmpresaDireccion', $emp['empresaDireccion']);
//                $session->set('usuarioEmpresaTelefono', $emp['empresaTelefono']);
//                $session->set('usuarioEmpresaComuna', $emp['empresaComuna']);
//                $session->set('usuarioEmpresaCiudad', $emp['empresaCiudad']);
//                $session->set('usuarioEmpresaCorreoIntercambio', $emp['empresaCorreoIntercambio']);
//                $session->set('usuarioEmpresaCorreoIntercambioClave', $emp['empresaCorreoIntercambioClave']);
                                
            }
            
        
        return $this->render('GtSistemaBundle:Inicio:inicio.html.twig');
        
        
    }        

    
}
