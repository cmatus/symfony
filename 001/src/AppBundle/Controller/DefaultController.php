<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*
        return $this->render('login/login.html.twig', [
            'cliente' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre')
            )
        ]);
        */
        return $this->render('cliente/listar.html.twig', [
            'cliente' => array(
                'nombre' => $this->getParameter('app.cliente'),
                'aplicacion' => $this->getParameter('app.nombre'),
                'tabCliente' => $this->getParameter('app.tabCliente'),
            )
        ]);
    }
}
