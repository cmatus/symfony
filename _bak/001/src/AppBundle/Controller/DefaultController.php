<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cliente;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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
