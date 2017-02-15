<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getController
 *
 * @author Alex
 */

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Gt\SistemaBundle\Clase\getClass;


class GetController extends Controller
{
    public function getAction()
    {
        $rutaCompras = getClass::recupera();
        
            
    }
    //put your code here
}
