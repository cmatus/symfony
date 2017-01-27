<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cliente;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    /**
     * @Route("/cliente/agregar/", name="clienteAgregar")
     */
    public function newAction(Request $request)
    {
        $cliente = new Cliente();
        $form = $this->createFormBuilder($cliente)
            ->add('rut', TextType::class)
            ->add('nombre', TextType::class)
            ->add('direccion', TextType::class)
            ->add('comuna', TextType::class)
            ->add('Registrar', SubmitType::class)
            ->getForm();
        return $this->render('cliente/editar.html.twig', array(
            'form' => $form->createView(),
             'cliente' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre'),
                'tabCliente' => $this->getParameter('app.tabCliente'),
                'datos' => $cliente
            )
        ));
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
