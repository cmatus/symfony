<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrarPerfilController extends Controller
{
    public function registrarPerfilAction()
    {
        return $this->render('GtSistemaBundle:Registrar:registrarPerfil.html.twig');
    }
    
    public function registrarPerfilDatosAction()
    {
        return $this->render('GtSistemaBundle:Registrar:registrarPerfilDatos.html.twig');
    }
    
}
