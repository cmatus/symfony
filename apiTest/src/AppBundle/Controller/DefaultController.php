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
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/persona');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('default/test.html.twig', array('personas' => $data));
    }
}
