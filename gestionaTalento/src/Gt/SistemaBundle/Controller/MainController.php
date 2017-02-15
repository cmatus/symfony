<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    
    
    public function indexAction()
    {
        
        return $this->render('GtSistemaBundle:Main:index.html.twig');
    }        

    
}
