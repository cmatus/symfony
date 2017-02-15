<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Gt\SistemaBundle\Entity\usuario;

use Gt\SistemaBundle\Form\LoginType;


class SecurityController extends Controller {

    var $aviso;
    var $error;

    public function logoutSessionAction(){
        $param = array();
        echo "acaaa";
        return $this->render('GtSistemaBundle:Security:logout.html.twig',$param);
    }

    public function loginAction() {        
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            echo "error:".$error;
        }
        
        $session->set('registroEmpresa','0');
    
    //exit();
        //echo $error;
        $param['last_username'] = $session->get(SecurityContext::LAST_USERNAME);
        $param['error'] = $error;
        $param['LOGIN'] = 1 ;
        $param['id'] = -1 ;
        return $this->render('GtSistemaBundle:Security:login.html.twig', $param);
    }

    public function inicioAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
//        $id = $this->getUser()->getId();
//        $session = $request->getSession();
//        $em = $this->getDoctrine()->getManager();
//        
//        // VERIFICACION DE AUTENTICIDAD DE USUARIO
//        $login = new usuario();
//        $form = $this->createForm(new LoginType(), $login);
//        $retorno = $this->processForm($form, $login, $request);
//        echo "acaaaa";
//        exit();
//        if($retorno=='login'){
//            $param['last_username'] = $session->get(SecurityContext::LAST_USERNAME);
//            $param['error'] = $request->get('error');
//            $param['LOGIN'] = 1 ;
//            $param['id'] = -1 ;
//            
//            echo "acaaaa";
//            return $this->render('GtSistemaBundle:Security:login.html.twig',$param);
//        }   
//        // FIN VERIFICACION DE AUTENTICIDAD DE USUARIO

        //echo $this->get('security.context')->getToken()->getUser()->getUsername();
        
        $list = $em->getRepository('GtSistemaBundle:usuario')->findBy(array('username' => $this->get('security.context')->getToken()->getUser()->getUsername()));
        $id;
        foreach ($list as $val) {
            $session->set('usuarioMail', $val->getUsuariomail());
            //$session->set('usuarioNombre', $val->getUsuarionombre() . ' ' . $val->getUsuarioapellidos());
            //$session->set('usuarioRut', $val->getUsuariorut());
            //$session->set('usuarioId', $val->getId());
            //$session->set('usuarioIdFEL', $val->getId());
            //$session->set('usuarioTipo', $val->getIdUsuarioTipo());
            //$session->set('registrosPorPagina', '100');
            
//            // OBTENEMOS INDICADORES ECONOMICOS
//            $p = array(
//                'em'=>$em,
//                'ano'=>  date('Y'),
//                'mes'=>  date('m'),
//                'dia'=>  date('d')
//            );
//            $valorUF = zprint::getValorUF($p);
//            $valorUTM = zprint::getValorUTM($p);            
//            $session->set('valorUF', $valorUF);
//            $session->set('valorUTM',$valorUTM);
//            
            // OBTENEMOS   DATOS  DE EMPRESA POR DEFECTO QUE  TIENE USUARIO 
            // PARA  CARGARLOS  EN SESION
            $isActive = $val->getIsActive();
            $id = $val->getId();
            $sql = " 
                    SELECT e.* FROM empresa e 
                    WHERE e.id = (  
                                    SELECT eu.empresa_id
                                    FROM empresaUsuario eu 
                                    WHERE eu.usuario_id=$id AND eu.empresaUsuarioDefault=1 LIMIT 1 
                                 ) 
                    " ;
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
//            
//            // obtenemos  idUsuario e idEmpresa desde  aloSopoprte
//            $emAloSoporte = $this->getDoctrine()->getManager(\AloSoporte\SistemaBundle\Clase\FuncionesClass::DB_ALOSOPORTE);
//            $arrUsuarioAloSoporte = $emAloSoporte->getRepository("AloSoporteSistemaBundle:usuario")->findBy(array('username'=>$session->get('usuarioMail')));
//            $idUsuarioAloSoporte ;
//            foreach ($arrUsuarioAloSoporte as $tmp) {$idUsuarioAloSoporte = $tmp->getId();}
//            $session->set('usuarioIdAloSoporte', $idUsuarioAloSoporte);
//            $arrEmpresaAloSoporte = $emAloSoporte->getRepository("AloSoporteSistemaBundle:empresa")->findBy(array('empresarut'=>$session->get('usuarioEmpresaRut')));
//            $idEmpresaAloSoporte ;
//            if(count($arrEmpresaAloSoporte)==0){
//                $parametros = array(
//                    'mensaje'=>'El RUT de la empresa no existe en AloSoporte.',
//                    'mensajeTecnico'=>'El RUT de la empresa por defecto en FEL no existe en la BBDD de AloSoporte.',
//                );
//                return $this->redirect($this->generateUrl("error_sistema",$parametros));
//            }
//            foreach ($arrEmpresaAloSoporte as $tmp) {$idEmpresaAloSoporte = $tmp->getId();}
//            $session->set('usuarioEmpresaIdAloSoporte', $idEmpresaAloSoporte);
//            
        }
//        // Agregamos menu a la Session
//        $menu = new Menu($em,$session->get('usuarioId'), $session->get('usuarioEmpresaId'));
//        $menu = $menu->generar();
//        
//        $session->set('menus', $menu);
//        
//        // BUSCAMOS SI USUARIO TIENE EMPRESAS DISTINTAS A DEMO
//        // PARA LANZAR  EL MODULO DE REGISTRO DE EPRESAS PARA USUARIOS
//        // SIN EMPRESA REGISTRADOS.
//        $sqlEmpresaDistintaDemo =   "
//                                    SELECT eu.id_empresa 
//                                    FROM empresaUsuario eu 
//                                    WHERE eu.id_usuario=$id and eu.id_empresa<>1 limit 1 
//                                    ";
//        $stmt = $em->getConnection()->prepare($sqlEmpresaDistintaDemo);
//        $stmt->execute();
//        $listaEmpresaDistintaDemo = $stmt->fetchAll();
//        if ( count($listaEmpresaDistintaDemo)=='0' and $session->get('registroEmpresa')==0  ) {
//            $session->set('registroEmpresa','1');
//            $p = array(
//                'registroEmpresa'=>'1',
//                'id'=>$id
//                    );
//            return $this->redirect($this->generateUrl('registro_empresa_administrar_mantenedor',$p));
//        }
//        
//        
//        
//        // verificamois  si empresa tiene Imagen
//        $existeEmpresaImagen = $em->getRepository('FELSistemaBundle:empresaImagen')->findBy(array('idEmpresa'=>$session->get('usuarioEmpresaId'), 'empresaImagenPorDefecto'=>1));
//        if(count($existeEmpresaImagen)>0 ){
//            $session->set('sinImagen','' );
//        }else{
//            $session->set('sinImagen','[SIN IMAGEN]' );
//        }
//        
        //$param['form'] = $form->createView();
        //return $this->render('PrincipalSistemaBundle:Inicio:inicio.html.twig', $param);
        //$parametros['sistema']='fel';
        //$parametros = array ('sistema'=>'fel');
        //return $this->redirect($this->generateUrl('principal_inicio',$parametros));
        return $this->render('GtSistemaBundle:Inicio:inicio.html.twig');
    }

    protected function processForm($form, $entidad, $request) {
        
        if ($request->getMethod() == 'GET') {
            $form->bind($request);
            $data = $form->getData();
            
            $username = $this->get('security.context')->getToken()->getUser()->getUsername();
            $password = $this->get('security.context')->getToken()->getUser()->getPassword();
            $esActivo = $this->get('security.context')->getToken()->getUser()->getisActive();
            $em = $this->getDoctrine()->getManager();
            
            
            $list = $em->getRepository('GtSistemaBundle:usuario')->findBy(array('usuarioMail' => $username ));
            // VERIFICAMOS SI USUARIO EXISTE
            if (count($list) > 0) {
                foreach ($list as $usuario) {
                    if( $esActivo==1 ){
                        // VERIFICAR SI CUENTA ESTA ACTIVA
                        if (!$usuario->getIsActive()) {
                            $this->get('session')->getFlashBag()->add('notice', 'Esta cuenta aun no ha sido activada.');
                            $this->aviso = 'Esta cuenta aun no ha sido activada.';
                            return 'login';
                        }

                        if (trim($this->get('security.context')->getToken()->getUser()->getPassword()) == trim($usuario->getUsuarioClave()) ) {
//                            if (trim($this->get('security.context')->getToken()->getUser()->getPassword()) != trim($usuario->getUsuarioClave()) ) {
                            return 'clave_ok';
                        } else {
                            $this->get('session')->getFlashBag()->add('notice', 'Clave Incorrecta!');
                            $this->aviso = '¡Clave Incorrecta!';
                            return 'login';
                        }
                    }else{
                        $this->get('session')->getFlashBag()->add('notice', 'Cuenta Inactiva.');
                        $this->aviso = 'Cuenta Inactiva.';
                        return 'login';
                    }
                }
            } else {
                $this->get('session')->getFlashBag()->add('notice', 'Correo electrónico no registrado!');
                $this->aviso = 'Correo electrónico no registrado!';
                return 'login';
            }
            
        }
    }

}
