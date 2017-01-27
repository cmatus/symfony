<?php

namespace Gibson\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GibsonAppBundle:Default:index.html.twig');
    }
}
