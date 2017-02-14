<?php

namespace Gt\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gt\SistemaBundle\Clase\informePdfClass;

class InformeController extends Controller
{

    public function informePdfAction($informeTipo, $participanteId)
    {                
        
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $empresaId = $request->getSession()->get("empresaId");
        
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setCharset('UTF-8');
        
        $parametros["em"]=$em;
        $parametros["empresaId"]=$empresaId;
        $parametros["participanteId"]=$participanteId;
        //$parametros["operacionId"]=$operacionId;
        //$parametros["docTipoId"]=$docTipoId;
        //$parametros["docId"]=$docId;
        //$parametros["docData"]=$docData;
                
        $pdf =  new informePdfClass($parametros);
        //$pdf->setData($data);
        if ($informeTipo=="1") {
            $pdf->getPersonaPdf();
        } else {
            $pdf->getOrganizacionPdf();
        }
        // Eliminamos imagen temporal
        //try{unlink($ruta.$empresaImagenNombre);}  catch (\Exception $e){}
        //try{unlink($rutaImagenTimbre);}  catch (\Exception $e){}
        return $response;        
                
        //return $this->render('TdBundle:Main:index.html.twig');
    }        
    
}
