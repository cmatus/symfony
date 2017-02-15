<?php

namespace Gt\SistemaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gt\SistemaBundle\Form\PreguntaType;
use Gt\SistemaBundle\Entity\pregunta;
use Gt\SistemaBundle\Entity\preguntaActividadClave;
use Gt\SistemaBundle\Entity\preguntaAprendizaje;
use Gt\SistemaBundle\Entity\preguntaCompetencia;
use Gt\SistemaBundle\Entity\preguntaConocimiento;

class PreguntaController extends Controller
{
    
    public function preguntaAction($preguntaTipoId) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
                
        $preguntaClasificacionData=$em->getRepository('GtSistemaBundle:pregunta')->getListaClasificacion(array("empresaId"=>$empresaId));
                
        $param["preguntaTipoId"]=$preguntaTipoId;
        $param["preguntaClasificacionData"]=$preguntaClasificacionData;
                
        return $this->render('GtSistemaBundle:Registrar:pregunta.html.twig', $param);
    }
    
    public function preguntaRegistrarAction($preguntaId, $preguntaTipoId)
    {
        $em = $this->getDoctrine()->getManager();        
        $request = $this->getRequest();
        $session = $request->getSession();
        $empresaId = $session->get("empresaId");
        $usuarioId = $session->get("usuarioId");
                                
        $competenciaId="0";
        $conocimientoId="0";
            
        if ($preguntaId>0) {
            $entityPregunta=$this->getDoctrine()
                ->getManager()->getRepository('GtSistemaBundle:pregunta')
                ->find($preguntaId);

            $preguntaTipoId=$entityPregunta->getPreguntaTipoId();
            
            switch ($preguntaTipoId) {               
                case "1":
                    $preguntaCompetenciaEntity=$em->getRepository('GtSistemaBundle:preguntaCompetencia')->findOneBy(array("preguntaId"=>$preguntaId));                    

                    if (count($preguntaCompetenciaEntity)>0) {
                        //echo "preg.".$preguntaId." comp:".$competenciaId."<br>";
                        $competenciaId=$preguntaCompetenciaEntity->getCompetenciaId();
                        if ($competenciaId=="") {
                            $competenciaId="0";        
                        }
                    } else {
                        $preguntaCompetenciaEntity=new preguntaCompetencia();    
                    }
                case "2":
                    $preguntaConocimientoEntity=$em->getRepository('GtSistemaBundle:preguntaConocimiento')->findOneBy(array("preguntaId"=>$preguntaId));                    

                    if (count($preguntaConocimientoEntity)>0) {
                        //echo "preg.".$preguntaId." comp:".$competenciaId."<br>";
                        $conocimientoId=$preguntaConocimientoEntity->getConocimientoId();
                        if ($conocimientoId=="") {
                            $conocimientoId="0";        
                        }
                    } else {
                        
                        $preguntaConocimientoEntity=new preguntaConocimiento();    
                    }                    
                    break;
            }
            //echo "preg.".$preguntaId." comp:".$competenciaId;
            //echo "competencia Id".$competenciaId."<br>";
            //$form = $this->createForm(new MaestroCiudadType(), $bco);
        } else {
            switch ($preguntaTipoId) {
                case "1":
                    $preguntaCompetenciaEntity=new preguntaCompetencia();                    
                    break;
                case "2":
                    $preguntaConocimientoEntity=new preguntaConocimiento();                    
                    break;                    
            }
            $entityPregunta=new pregunta();   
        }
        
        
        $form = $this->createForm(new PreguntaType($em, $preguntaTipoId, $competenciaId, $conocimientoId), $entityPregunta);
         
        if ($request->getMethod() == 'POST') {            
            //$form->bind($request);
            
            
            $form->handleRequest($request);
            //$formData=$form->getData();
            //$preguntaId=$formData["id"];
            //echo "id:".$form->get('id')->getData()."<br>"; 
            //$preguntaId=$form->get('id')->getData();
            //echo "id:".$preguntaId."<br>"; 
            //echo "POST";
            //echo "Grabanado.. pregunta id".$preguntaId;
            //$competenciaId="";
            //$conocimientoId="";
            switch ($preguntaTipoId) {
                case "1":
                    $competenciaId=$form->get("competenciaId")->getData();
                    break;
                case "2":
                    $conocimientoId=$form->get("conocimientoId")->getData();
                    break;
            }
            
            
            //echo "id comp:".$competenciaId;
            //exit();
            //$preguntaId=$request->get("thisform_id");
            
            //$value= $data->get('publico')->getData();
            //$form->bind($request);
            
            //print_r($formData);
            //exit();
            
            //echo "id:".$preguntaId."<br>";    
                        
            $form = $this->createForm(new PreguntaType($em, $preguntaTipoId, $competenciaId, $conocimientoId), $entityPregunta);
            
            
            $form->bind($request);
            
            
            if ($form->isValid()) {
                //echo "Grabando pregunta tipo: ".$preguntaTipoId;
                
                //$preguntaCompetencia=new preguntaCompetencia();
                //echo "id pregunta: [".$entityPregunta->getId()."]<br>";
                
                $entityPregunta->setEmpresaId($empresaId);
                //echo "aca 5";
                //$entityPregunta->setPreguntaCompetencia($entityPregunta);
                $em->persist($entityPregunta);
                $em->flush();
                //echo "aca 6";
                $preguntaId=$entityPregunta->getId();
                //echo "aca 7<br>";
                
                
                switch ($preguntaTipoId) {
                    case "1":
                        
                        $arrFind=array('preguntaId'=>$preguntaId);
                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}
                        $em->flush();
                
                
                        $preguntaCompetenciaEntity->setPregunta($entityPregunta);
                        $preguntaCompetenciaEntity->setCompetenciaId($competenciaId);
                        $em->persist($preguntaCompetenciaEntity);
                        $em->flush();
                        break;
                    case "2":
                        $arrFind=array('preguntaId'=>$preguntaId);
                        $entityPreguntaAprendizaje = $em->getRepository("GtSistemaBundle:preguntaAprendizaje")->findBy($arrFind);
                        foreach ($entityPreguntaAprendizaje as $value) {$em->remove($value);}
                        $em->flush();
                
                        $preguntaConocimientoEntity->setPregunta($entityPregunta);
                        //$preguntaConocimientoEntity->setPreguntaId($preguntaId);                        
                        $preguntaConocimientoEntity->setConocimientoId($conocimientoId);
                        $em->persist($preguntaConocimientoEntity);
                        $em->flush();
                        
                         
                         
                        break;
                }
              
                //$competenciaId=$entityPregunta->getCompetenciaId();
                //$conocimientoId=$entityPregunta->getConocimientoId();
                                                                             
               // $competenciaId=1;
                if ($competenciaId>0) {                    
                    $actividadClaveIds=$request->get("tbxActividadClaveIds");
                    if ($actividadClaveIds!="") {
                        $arrActividadClave=explode(",",$actividadClaveIds);
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
//                        $arrFind=array('competenciaId'=>$competenciaId, 'preguntaId'=>$preguntaId);
//                        $entityPreguntaActividadClave = $em->getRepository("GtSistemaBundle:preguntaActividadClave")->findBy($arrFind);
//                        foreach ($entityPreguntaActividadClave as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrActividadClave)-1;$i++) {
                            $preguntaActividadClave=new preguntaActividadClave();                        
                            $preguntaActividadClave->setPreguntaId($preguntaId);
                            //$preguntaActividadClave->setCompetenciaId($competenciaId);
                            $preguntaActividadClave->setActividadClaveId($arrActividadClave[$i-1]);
                            $em->persist($preguntaActividadClave);
                            $em->flush();
                        } 
                    } 
                }
                echo "acaaa111<br>";
                if ($conocimientoId>0) {                    
                    $aprendizajeIds=$request->get("tbxAprendizajeIds");                    
                    if ($aprendizajeIds!="") {
                        $arrAprendizaje=explode(",",$aprendizajeIds);
                        echo "acaaa<br>";
                        //echo count($arrActividadClave);
                        //foreach ( $arrActividadClaveIds as $row ) {
//                        $arrFind=array('conocimientoId'=>$conocimientoId, 'preguntaId'=>$preguntaId);
//                        $entityPreguntaAprendizaje = $em->getRepository("GtSistemaBundle:preguntaAprendizaje")->findBy($arrFind);
//                        foreach ($entityPreguntaAprendizaje as $value) {$em->remove($value);}

                        for ($i=1;$i<=count($arrAprendizaje)-1;$i++) {
                            echo "pregunta id:".$preguntaId;
                            $preguntaAprendizaje=new preguntaAprendizaje();                        
                            $preguntaAprendizaje->setPreguntaId($preguntaId);
                            //$preguntaAprendizaje->setConocimientoId($conocimientoId);
                            $preguntaAprendizaje->setAprendizajeId($arrAprendizaje[$i-1]);
                            $em->persist($preguntaAprendizaje);
                            $em->flush();
                        } 
                    } 
                }
                
                $aviso = "Datos registrados con exito.";
                
                //$param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                //return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }
            
        } else {
               
            
            
//                
//                if ($preguntaId!="") {
//                    //echo "id Borrando:".$preguntaId."<br>";
//                    
//                    $entityPregunta=$em->getRepository('GtSistemaBundle:pregunta')->find($preguntaId);
//                    $em->remove($entityPregunta);
//                    $em->flush();
//                    //$mensaje = "Registro eliminado con exito.";
//                    //$param['form'] = "";
//                    //$param['mensaje'] = $mensaje;
//                    //return $this->render('GtSistemaBundle:Registrar:pregunta.html.twig', $param);
//                } 
//            $entityPregunta=new pregunta();                
//            $form = $this->createForm(new PreguntaType(), $entityPregunta);
        }
        
         
        $param['form'] = $form->createView();
        $param['preguntaId'] = $preguntaId;
        $param['preguntaTipoId'] = $preguntaTipoId;
        $param['competenciaId'] = $competenciaId;
        $param['conocimientoId'] = $conocimientoId;
        
        return $this->render('GtSistemaBundle:Registrar:preguntaRegistrar.html.twig', $param);
        
    }
    
    public function preguntaBorrarAction($idPregunta)
    {
        //echo "id:".$idPregunta."<br>";
        $em = $this->getDoctrine()->getManager();
        $entityPregunta=$em->getRepository('GtSistemaBundle:pregunta')->find($idPregunta);
        $em->remove($entityPregunta);
        $em->flush();
        $mensaje = "Registro eliminado con exito.";
        $entityPregunta=new pregunta();   
        $form = $this->createForm(new PreguntaType($em), $entityPregunta);
        
        $param['form'] = $form->createView();
        //$param['mensaje'] = $mensaje;
        return $this->render('GtSistemaBundle:Registrar:pregunta.html.twig', $param);
    }
    
    public function preguntaDatosGrabarAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        
        if ($request->getMethod() == 'POST' ) {
            $form->bind($request);
            if ($form->isValid() )
            {
                $em->persist($entidad_ciudad);
                $em->flush();
                $aviso = "Datos registrados con exito.";
                $param = array( 'aviso'=> $aviso , 'accion'=> $accion );
                return $this->redirect($this->generateUrl('maestro_ciudad_mantenedorDHX' , $param));
            }
        }                
                
    }
       
    public function preguntaTablaAction($preguntaTipoId)
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy(array("idEmpresa"=>"1"));        
        
        //echo "pregunta tipo:".$preguntaTipoId."<br>";
        $arrBusca=array("preguntaTipoId"=>$preguntaTipoId);
    
        $arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy($arrBusca);
        
        $response = new JsonResponse();
        
        switch ($preguntaTipoId) {
            case "1":
                $query = $em->createQueryBuilder()
                ->select("a.id, a.preguntaCodigo, a.preguntaNombre, b.competenciaId, c.competenciaNombre, '' as preguntaClasificacion ")
                ->from('GtSistemaBundle:pregunta', 'a')
                ->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id') 
                ->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id') 
                ->where('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);
                break;
            case "2":
                $query = $em->createQueryBuilder()
                ->select("a.id, a.preguntaCodigo, a.preguntaNombre, b.conocimientoId, c.conocimientoNombre, '' as preguntaClasificacion ")
                ->from('GtSistemaBundle:pregunta', 'a')
                ->leftJoin('GtSistemaBundle:preguntaConocimiento', 'b', 'WITH', 'b.preguntaId = a.id') 
                ->leftJoin('GtSistemaBundle:conocimiento', 'c', 'WITH', 'b.conocimientoId = c.id') 
                ->where('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);
                break;
        }
            
        //echo $query->getQuery()->getSQL();
        //$arrayData=$query->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY); 
        $arrayData=$query->getQuery()->getArrayResult();
        
        /* $query = $em->createQueryBuilder()
                //->select("a, b,  c.competenciaNombre, '' as Clasificacion ")
                ->select("a.id, a.preguntaCodigo, a.preguntaNombre, b.competenciaId, c.competenciaNombre, '' as Clasificacion ")
                ->from('GtSistemaBundle:pregunta', 'a')
                ->innerJoin('GtSistemaBundle:preguntaCompetencia', 'b', 'WITH', 'b.preguntaId = a.id')
                ->innerJoin('GtSistemaBundle:competencia', 'c', 'WITH', 'b.competenciaId = c.id')
                ->where('a.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId);*/
                
        //$data = $query->getQuery()->getResult();
 
//        //foreach($data as $row){
//         foreach($arrayData as $key => $row) {
//            $preguntaClasificacion="";
//            if (count($row->getClasificaciones())>=1) {
//                $arrPreguntaClasificacion=$row->getClasificaciones();                        
//                
//                foreach($arrPreguntaClasificacion as $key2 => $rowClasificacion) {;
//                
//                echo "<pre>";
//                echo print_r($rowClasificacion);
//                echo "</pre>";
//                
//                
//                       // echo $arrPreguntaClasificacion[$key2]['clasificacionNombre:Gt\SistemaBundle\Entity\clasificacion:private'];
////                    echo "<pre>";
////                    echo print_r($rowClasificacion);
////                    echo "<pre>";
//                    //$preguntaClasificacion.=$rowClasificacion."<br>";
//                }
//            }
//            
//             $arrayData[$key]['Clasificacion'] = $preguntaClasificacion;
//             
//        }
//        
//        exit();
            
        foreach($arrayData as $key => $value)
        {
           // echo $arrayData[$key]->getClasificaciones();
            $preguntaId=$arrayData[$key]['id'];
            
            $arrBusca=array("preguntaId"=>$preguntaId);
            //$preguntaClasificacionData = $em->getRepository('GtSistemaBundle:preguntaclasificacion')->findBy($arrBusca);
            $preguntaClasificacion="";
            $preguntaData=$em->getRepository('GtSistemaBundle:pregunta')->find($preguntaId);
            $arrPreguntaClasificacion=$preguntaData->getClasificaciones(); 
            if (count($arrPreguntaClasificacion)>=1) {
                foreach($arrPreguntaClasificacion as $key2 => $rowClasificacion) {
                    //echo $rowClasificacion->getClasificacionNombre();
                    $preguntaClasificacion.=$rowClasificacion->getClasificacionNombre()."<br>";
                    /*echo "<pre>";
                    echo print_r($rowClasificacion);
                    echo "</pre>";*/
                }
            }
            
//            $preguntaClasifacion="";
//            if (count($preguntaClasificacionData)>=1) {
//                switch($preguntaClasificacionData->getPreguntaClasifacionId()) {
//                    case "1":
//                        $preguntaClasificacion.="Formacion<br>";
//                        break;
//                    case "2":
//                        $preguntaClasificacion.="Desarrollo<br>";
//                        break;
//                    case "3":
//                        $preguntaClasificacion.="Logrado<br>";
//                        break;
//                }
//            }
            $arrayData[$key]['preguntaClasificacion'] = $preguntaClasificacion;
            
        }
        //foreach($arrayData as $row) {
        //    $row["Clasificacion"]="1";
        //}
        /*$arrayData = $this->getDoctrine()
            ->getRepository('GtSistemaBundle:pregunta')
            ->createQueryBuilder('c')
            ->select('c')            
            ->where('c.preguntaTipoId = :preguntaTipoId')->setParameter('preguntaTipoId', $preguntaTipoId)
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
         ;*/
 
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    public function preguntaTablaClasificacionAction($preguntaId) {
        
        $em = $this->getDoctrine()->getManager();
        $parametros=array("preguntaId"=>$preguntaId);
        
        $preguntaClasificacion=$em->getRepository('GtSistemaBundle:pregunta')->getListaClasificacion($parametros);
        
        //$preguntaClasificacion=$stmt->fetchAll();
        
        foreach ($preguntaClasificacion as $row) {
            echo $row["clasificacionNombre"]."<br>";
        }
        
        $html="xxxxx<br>zzzzz";
        $response = new Response();
        $response->headers->set('Content-Type', 'text/html');
        //$response->send();

        $response->setContent($html);
        return $response;
        
    }
    
    
    public function preguntaTablaActividadClaveAction($competenciaId, $preguntaId)
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$competenciaId="2";
        //$arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy(array("idEmpresa"=>"1"));        
        //$arrayData = $em->getRepository('GtSistemaBundle:actividadClave')->findBy(array("competenciaId"=>$competenciaId));
//        echo "<pre>";
//        print_r($arrayData);
//        echo "</pre>";
        //$preguntaId="7";
        $response = new JsonResponse();
        
        $parametros=array(  "competenciaId"=>$competenciaId,
                            "preguntaId"=>$preguntaId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:pregunta')->getListaActividadClave($parametros);
        
//        $arrayData = $this->getDoctrine()
//            ->getRepository('GtSistemaBundle:actividadClave')
//            ->createQueryBuilder('c')
//            ->select('c')
//            //->innerJoin('FELSistemaBundle:dte', 'b', 'WITH', 'b.id = a.idDte')     
//            ->where('c.competenciaId = :competenciaId')->setParameter('competenciaId', $competenciaId)
//            ->getQuery()
//            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
//         ;
 
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    public function preguntaTablaAprendizajeAction($conocimientoId, $preguntaId)
    {           
        //$request = $this->getRequest();        
        $em = $this->getDoctrine()->getManager();
        //$competenciaId="2";
        //$arrayData = $em->getRepository('GtSistemaBundle:pregunta')->findBy(array("idEmpresa"=>"1"));        
        //$arrayData = $em->getRepository('GtSistemaBundle:actividadClave')->findBy(array("competenciaId"=>$competenciaId));
//        echo "<pre>";
//        print_r($arrayData);
//        echo "</pre>";
        
        $response = new JsonResponse();
        
        $parametros=array("conocimientoId"=>$conocimientoId,
                        "preguntaId"=>$preguntaId);
        
        $arrayData=$em->getRepository('GtSistemaBundle:pregunta')->getListaAprendizaje($parametros);
        
        
        
        /*$arrayData = $this->getDoctrine()
            ->getRepository('GtSistemaBundle:aprendizaje')
            ->createQueryBuilder('c')
            ->select('c')
            ->where('c.conocimientoId = :conocimientoId')->setParameter('conocimientoId', $conocimientoId)
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
         ;*/
 
        return new JsonResponse($arrayData);
                    
        $response->setData(array(
         'data' => $arrayData
        ));
        return $response;
    }
    
    
}
