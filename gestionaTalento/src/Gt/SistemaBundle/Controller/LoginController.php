<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('GtSistemaBundle:Login:login.html.twig');
    }
}
