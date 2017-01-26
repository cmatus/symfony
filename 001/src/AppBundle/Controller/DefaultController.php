<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="raiz")
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig', [
            'datos' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre'),
                'tabCliente' => $this->getParameter('app.tabCliente'),
                'datos' => $clientes
            )
        ]);
    }

    /**
     * @Route("/cliente/listar", name="clienteListar")
     */
    public function listarAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('AppBundle:Cliente')->findAll();
        
        return $this->render('cliente/listar.html.twig', [
            'cliente' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre'),
                'tabCliente' => $this->getParameter('app.tabCliente'),
                'datos' => $clientes
            )
        ]);

    }

    /**
     * @Route("/cliente/editar/{rut}", name="clienteEditar")
     */
    public function editarAction($rut)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('AppBundle:Cliente')->findOneBy(array('rut' => $rut));
        return $this->render('cliente/editar.html.twig', [
            'cliente' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre'),
                'tabCliente' => $this->getParameter('app.tabCliente'),
                'datos' => $cliente
            )
        ]);
    }
    /*
    private function createCreateForm(cliente $entity)
    {
        $form = $this->createForm(new clienteType(), $entity, array(
            'action' => $this->generateUrl('mrf_clientes_create'), 
            'method' => 'POST'));   
        return $form;
    }
    */
}
