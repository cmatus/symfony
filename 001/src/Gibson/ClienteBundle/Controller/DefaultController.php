<?php

namespace Gibson\ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('GibsonClienteBundle:Default:index.html.twig');
    }

    public function listarAction()
    {
        return $this->render('GibsonClienteBundle:Default:listar.html.twig');
    }

    public function agregarAction()
    {
        return $this->render('GibsonClienteBundle:Default:agregar.html.twig');
    }

}
