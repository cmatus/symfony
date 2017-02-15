<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of informeClass
 *
 * @author Alex
 */

namespace Gt\SistemaBundle\Clase;

use Symfony\Component\HttpFoundation\Response;
//use FEL\SistemaBundle\Clase\NumLetraClass;
//use FacturaBundle\Clase\tmpClass;
use FPDF_FPDF;


class informePdfClass {
    //put your code here
    
    private $em;
    private $empId;
    private $participanteId;
    private $docTipoId;
    private $docId;
    private $docData;
    
     public function __construct($parametros) {        
        $this->em           = $parametros["em"];
        $this->empId        = $parametros["empresaId"];
        $this->participanteId  = $parametros["participanteId"];
        /*$this->docTipoId    = $parametros["docTipoId"];
        $this->docId        = $parametros["docId"];
        $this->docData      = $parametros["docData"];        */
    }
    
    public function getPersonaPdf() {  
        $em=$this->em;
        $empId=$this->empId;
        $data=$this->docData;
        $participanteId=$this->participanteId;
        
        $pdf = new \FPDF_FPDF('P', 'cm', array(21.5, 28));
        
        $pdf->AddPage('P', array(21.5, 28));
        $pdf->SetMargins(0, 0.5, 0);
        $pdf->SetAutoPageBreak(0, 0);
        //$pdf->SetFont('Arial', '', 8);
                                
        $pdf->SetFont('Arial', '', 8);
        /*$pdf->SetTextColor(0, 0, 0);
        $pdf->SetLineWidth(0.05);
        $pdf->SetDrawColor(255, 0, 0);
        $pdf->Rect(15, 0.6, 6.0, 1.8); //rectangulo rojo*/
        
        $participanteEntity = $em->getRepository("GtSistemaBundle:participante")->find($participanteId);        
        $perfilId=$participanteEntity->getPerfilId();
        $personaId=$participanteEntity->getPersonaId();
        $personaEntity = $em->getRepository("GtSistemaBundle:persona")->find($personaId);
        $perfilEntity = $em->getRepository("GtSistemaBundle:perfil")->find($perfilId);
        
        $personaNombre=$personaEntity->getPersonaNombre();
        $personaCorreo=$personaEntity->getPersonaCorreo();
        $personaEmpresa="Agencia de Aduana";
        $evaluadorId=$personaEntity->getPersonaId();
        $personaEntity = $em->getRepository("GtSistemaBundle:persona")->find($evaluadorId);
        $evaluadorNombre=$personaEntity->getPersonaNombre();
        
        $personaCargo=$perfilEntity->getPerfilNombre();
        //$personaNombre="Sylvia Valdebenito";
        //$personaCorreo="Sylvia.Valdebenito@stein.cl";
        
                
        $bordes="1";
        
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(19.5, 1, "PLAN DE DESARROLLO", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "1. DATOS DE LA PERSONA", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(1.8, 0.35, "Cargo",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaCargo,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(1.8, 0.35, "Nombre",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaNombre,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(1.8, 0.35, "Correo",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaCorreo,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(1.8, 0.35, "Empresa",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaEmpresa,       $bordes, 1, 'L'); 
        
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "2. COMPETENCIAS Y CONOCIMIENTOS DEL CARGO EVALUADO", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        
                
        $pdf->SetFont('Arial', 'B', 7);        
        $pdf->SetX(1);
        $pdf->Cell(9.5, 0.35, "Competencias", $bordes, 0, 'C');
        $pdf->Cell(0.5, 0.35, "", $bordes, 0, 'C');
        $pdf->Cell(9.5, 0.35, "Conocimientos", $bordes, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', '', 7);        
                        
        $arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
        $perfilCompetenciaEntity = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrBuscaPerfilCompetencia);        
        foreach( $perfilCompetenciaEntity as $row ) {
            $competenciaId=$row->getCompetenciaId();
            $competenciaEntity=$em->getRepository("GtSistemaBundle:competencia")->find($competenciaId);
            $competenciaNombre=utf8_decode($competenciaEntity->getCompetenciaNombre());
            $pdf->SetX(1);
            $pdf->Cell(9.5, 0.35, $competenciaNombre, $bordes, 1, 'L');                
        }
        $posCompetencia=$pdf->GetY();
        
        $pdf->SetY(5.50);
        $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
        $perfilConocimientoEntity = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrBuscaPerfilConocimiento);        
        foreach( $perfilConocimientoEntity as $row ) {
            $conocimientoId=$row->getConocimientoId();
            $conocimientoEntity=$em->getRepository("GtSistemaBundle:conocimiento")->find($conocimientoId);
            $conocimientoNombre=utf8_decode($conocimientoEntity->getConocimientoNombre());
            $pdf->SetX(11);
            $pdf->Cell(9.5, 0.35, $conocimientoNombre, $bordes, 1, 'L');                
        }
        
        $posConocimiento=$pdf->GetY();
        
        if ($posCompetencia>$posConocimiento) {
            $pdf->SetY($posCompetencia+0.5);
        } else {
            $pdf->SetY($posConocimiento+0.5);
        }
                
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        //$pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "3. RESULTADOS EVALUACION", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
                        
        $evaluacionFecha="2016-07";        
        $evaluadorNombre=$evaluadorNombre;
        
        $pdf->SetX(1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(2.5, 0.35, "Fecha Evaluacion",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$evaluacionFecha,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(2.5, 0.35, "Evaluador por",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$evaluadorNombre,       $bordes, 1, 'L'); 
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetFont('Arial', '', 7);        
        
        $pdf->SetX(1);
        $pdf->Cell(9.5, 0.35, "Competencias", $bordes, 0, 'C');
        $pdf->Cell(0.5, 0.35, "", $bordes, 0, 'C');
        $pdf->Cell(9.5, 0.35, "Conocimientos", $bordes, 1, 'C');
        $pdf->SetX(1);
        
        $arrCompetenciaFormacion=[];
        $arrCompetenciaDesarrollo=[];
        $arrCompetenciaLogrado=[];
        $contFormacion=0;
        $contDesarrollo=0;
        $contLogrado=0;
                
        $arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
        $perfilCompetenciaEntity = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrBuscaPerfilCompetencia);        
        $posCompetencia=$pdf->GetY();
        foreach( $perfilCompetenciaEntity as $row ) {
            $competenciaId=$row->getCompetenciaId();
            $competenciaEntity=$em->getRepository("GtSistemaBundle:competencia")->find($competenciaId);
            $competenciaNombre=utf8_decode($competenciaEntity->getCompetenciaNombre());
            
            $pdf->SetX(1);
            $pdf->Cell(7, 0.35, $competenciaNombre, $bordes, 0, 'L');                
            
            $arrBuscaEvaluacionCompetencia=array("participanteId"=>$participanteId, "competenciaId"=>$competenciaId);
            $evaluacionCompetenciaEntity=$em->getRepository("GtSistemaBundle:evaluacionCompetencia")->findOneBy($arrBuscaEvaluacionCompetencia);
            $evaluacionCompetenciaCumplimiento="";
            if (count($evaluacionCompetenciaEntity)>=1) {
                $evaluacionCompetenciaRespuesta=$evaluacionCompetenciaEntity->getEvaluacionCompetenciaRespuesta();

                $evaluacionCompetenciaRespuesta=round($evaluacionCompetenciaRespuesta,2);
                if ($evaluacionCompetenciaRespuesta<=2.75) {
                    $evaluacionCompetenciaCumplimiento="Necesita Formacion";
                    $arrCompetenciaFormacion[$contFormacion]=$competenciaId;
                    $contFormacion++;
                } elseif ($evaluacionCompetenciaRespuesta>=2.76 && $evaluacionCompetenciaRespuesta<=3.60) {
                    $evaluacionCompetenciaCumplimiento="En Desarrollo";
                    $arrCompetenciaFormacion[$contFormacion]=$competenciaId;
                    $contFormacion++;
                    //$arrCompetenciaDesarrollo[$contDesarrollo]=$competenciaId;
                    //$contDesarrollo++;
                } elseif ($evaluacionCompetenciaRespuesta>=3.61 && $evaluacionCompetenciaRespuesta>=4) {
                    $evaluacionCompetenciaCumplimiento="Logrado";
                    $arrCompetenciaLogrado[$contLogrado]=$competenciaId;
                    $contLogrado++;
                } else {
                    $evaluacionCompetenciaCumplimiento="Error";
                }
            }
            $pdf->Cell(2.5, 0.35, $evaluacionCompetenciaCumplimiento, $bordes, 1, 'L');
        }
        
        $pdf->SetY($posCompetencia);
        
        $arrConocimientoFormacion=[];
        $arrConocimientoDesarrollo=[];
        $arrConocimientoLogrado=[];
        $contFormacion=0;
        $contDesarrollo=0;
        $contLogrado=0;
                
        $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
        $perfilConocimientoEntity = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrBuscaPerfilConocimiento);        
        foreach( $perfilConocimientoEntity as $row ) {
            $conocimientoId=$row->getConocimientoId();
            $conocimientoEntity=$em->getRepository("GtSistemaBundle:conocimiento")->find($conocimientoId);
            $conocimientoNombre=utf8_decode($conocimientoEntity->getConocimientoNombre());
            $pdf->SetX(11);
            $pdf->Cell(7, 0.35, $conocimientoNombre, $bordes, 0, 'L');                 
            
            $arrBuscaEvaluacionConocimiento=array("participanteId"=>$participanteId, "conocimientoId"=>$conocimientoId);
            $evaluacionConocimientoEntity=$em->getRepository("GtSistemaBundle:evaluacionConocimiento")->findOneBy($arrBuscaEvaluacionConocimiento);
            $evaluacionConocimientoCumplimiento="";
            if (count($evaluacionConocimientoEntity)>=1) {
                $evaluacionConocimientoRespuesta=$evaluacionConocimientoEntity->getEvaluacionConocimientoRespuesta();

                $evaluacionConocimientoRespuesta=round($evaluacionConocimientoRespuesta,2);
                if ($evaluacionConocimientoRespuesta<=2.75) {
                    $evaluacionConocimientoCumplimiento="Necesita Formacion";
                    $arrConocimientoFormacion[$contFormacion]=$conocimientoId;
                    $contFormacion++;
                } elseif ($evaluacionConocimientoRespuesta>=2.76 && $evaluacionConocimientoRespuesta<=3.60) {
                    $evaluacionConocimientoCumplimiento="En Desarrollo";
                    //$arrConocimientoDesarrollo[$contDesarrollo]=$competenciaId;
                    //$contDesarrollo++;
                    $arrConocimientoFormacion[$contFormacion]=$conocimientoId;
                    $contFormacion++;
                } elseif ($evaluacionConocimientoRespuesta>=3.61 && $evaluacionConocimientoRespuesta>=4) {
                    $evaluacionConocimientoCumplimiento="Logrado";
                    $arrConocimientoLogrado[$contLogrado]=$conocimientoId;
                    $contLogrado++;
                } else {
                    $evaluacionConocimientoCumplimiento="Error";
                }
            }
            $pdf->Cell(2.5, 0.35, $evaluacionConocimientoCumplimiento, $bordes, 1, 'L');                        
        }
                
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "4. REQUERIMIENTOS DE FORMACION", 0, 1, 'L');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
                                        
        $pdf->SetFont('Arial', '', 7);               
        $pdf->SetX(1);
        $pdf->Cell(16, 0.35, "Nombre del Curso", $bordes, 0, 'L');        
        $pdf->Cell(3.5, 0.35, "Horas", $bordes, 1, 'C');
        $pdf->SetX(1);
             
        $query = $em->createQueryBuilder()
            ->select("a.cursoId")
            ->from('GtSistemaBundle:cursoCompetencia', 'a')             
            ->where('a.competenciaId in (:competenciaId)')->setParameter('competenciaId', $arrCompetenciaFormacion)           
            //->orWhere('a.competenciaId in (:competenciaId)')->setParameter('competenciaId', $arrCompetenciaDesarrollo)
            ->groupBy('a.cursoId');                
                
        $arrayData=$query->getQuery()->getArrayResult();
                
        foreach($arrayData as $row) {
           
            $cursoId=$row["cursoId"];
            
            $cursoEntity=$em->getRepository("GtSistemaBundle:curso")->find($cursoId);
            $cursoNombre=utf8_decode($cursoEntity->getCursoNombre());
            $cursoHoras=$cursoEntity->getCursoHoras();
            $pdf->Cell(16, 0.35, $cursoNombre, $bordes, 0, 'L');        
            $pdf->Cell(3.5, 0.35, $cursoHoras, $bordes, 1, 'C');        
            $pdf->SetX(1);
        }
              
        $query = $em->createQueryBuilder()
            ->select("a.cursoId")
            ->from('GtSistemaBundle:cursoConocimiento', 'a')             
            ->where('a.conocimientoId in (:conocimientoId)')->setParameter('conocimientoId', $arrConocimientoFormacion)                       
            ->groupBy('a.cursoId');                
                
        $arrayData=$query->getQuery()->getArrayResult();
                
        foreach($arrayData as $row) {
           
            $cursoId=$row["cursoId"];
            
            $cursoEntity=$em->getRepository("GtSistemaBundle:curso")->find($cursoId);
            $cursoNombre=utf8_decode($cursoEntity->getCursoNombre());
            $cursoHoras=$cursoEntity->getCursoHoras();
            $pdf->Cell(16, 0.35, $cursoNombre, $bordes, 0, 'L');        
            $pdf->Cell(3.5, 0.35, $cursoHoras, $bordes, 1, 'C');        
            $pdf->SetX(1);
        }

        
        $response = new Response($pdf->Output());
        
        //unlink($archivoRuta.$empresaImagenNombreTmp);                
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setCharset('UTF-8');
        $response->setCharset('ISO-8859-1');
        return $response;
      }
      
    public function getOrganizacionPdf() {  

        $em=$this->em;
        $empId=$this->empId;
        
        $pdf = new \FPDF_FPDF('P', 'cm', array(21.5, 28));
        
        $pdf->AddPage('P', array(21.5, 28));
        $pdf->SetMargins(0, 0.5, 0);
        $pdf->SetAutoPageBreak(0, 0);
        //$pdf->SetFont('Arial', '', 8);
                                
        $pdf->SetFont('Arial', '', 8);
        /*$pdf->SetTextColor(0, 0, 0);
        $pdf->SetLineWidth(0.05);
        $pdf->SetDrawColor(255, 0, 0);
        $pdf->Rect(15, 0.6, 6.0, 1.8); //rectangulo rojo*/
        $participanteId="11";
        $perfilId="1";
        $personaCargo="Ejecutiva de Cuentas Importaciones";
        $personaNombre="Sylvia Valdebenito";
        $personaCorreo="Sylvia.Valdebenito@stein.cl";
        $personaEmpresa="Agencia de Aduana";
                
        $bordes="1";
        $evaluacionId="5";
        $evaluacionFecha="2016-07";
        
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(19.5, 1, "PLAN DE DESARROLLO ORGANIZACIONAL", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "1. DATOS DE LA PERSONA", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(2.5, 0.35, "Fecha Evaluacion",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$evaluacionFecha,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(2.5, 0.35, "Cargo Evaluado",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaCargo,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(2.5, 0.35, "Total Personas",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaNombre,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(2.5, 0.35, "Empresa",       $bordes, 0, 'L');        
        $pdf->Cell(10,   0.35," ".$personaEmpresa,       $bordes, 1, 'L'); 
        $pdf->SetX(1);
        $pdf->Cell(2.5, 0.35, "Personas Evaluadas",       $bordes, 0, 'L');        
        $query = $em->createQueryBuilder()
            ->select("b.personaNombre")
            ->from('GtSistemaBundle:participante', 'a')
            ->innerJoin('GtSistemaBundle:persona', 'b', 'WITH', 'a.personaId = b.id')
            ->where('a.evaluacionId= :evaluacionId')->setParameter('evaluacionId', $evaluacionId)
            ->andWhere('a.perfilId= :perfilId')->setParameter('perfilId', $perfilId);
        $arrayData=$query->getQuery()->getArrayResult();
        
//        echo "<pre>";
//        echo print_r($arrayData);
//        echo "</pre>";

        foreach($arrayData as $key => $row) {
            //$personaNombre = $row[$key]["personaNombre"];
            $personaNombre = $row["personaNombre"];
            $pdf->Cell(5,   0.35," ".$personaNombre, $bordes, 0, 'L'); 
            $pdf->Cell(5,   0.35," Evaluador: "."", $bordes, 1, 'L'); 
            $pdf->SetX(3.5);
        }
                
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "2. COMPETENCIAS Y CONOCIMIENTOS DEL CARGO EVALUADO", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
                        
        $pdf->SetFont('Arial', 'B', 7);        
        $pdf->SetX(1);
        $pdf->Cell(9.5, 0.35, "Competencias", $bordes, 0, 'C');       
        $pdf->Cell(0.5, 0.35, "", $bordes, 0, 'C');
        $pdf->Cell(9.5, 0.35, "Conocimientos", $bordes, 1, 'C');
        $pdf->SetX(1);
        $pdf->SetFont('Arial', '', 7);        
        $posConocimientos=$pdf->GetY();
                        
        $arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
        $perfilCompetenciaEntity = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrBuscaPerfilCompetencia);        
        foreach( $perfilCompetenciaEntity as $row ) {
            $competenciaId=$row->getCompetenciaId();
            $competenciaEntity=$em->getRepository("GtSistemaBundle:competencia")->find($competenciaId);
            $competenciaNombre=$competenciaEntity->getCompetenciaNombre();
            $pdf->SetX(1);
            $pdf->Cell(9.5, 0.35, $competenciaNombre, $bordes, 1, 'L');                
        }
        $posCompetencia=$pdf->GetY();
        
        $pdf->SetY($posConocimientos);
        $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
        $perfilConocimientoEntity = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrBuscaPerfilConocimiento);        
        foreach( $perfilConocimientoEntity as $row ) {
            $conocimientoId=$row->getConocimientoId();
            $conocimientoEntity=$em->getRepository("GtSistemaBundle:conocimiento")->find($conocimientoId);
            $conocimientoNombre=$conocimientoEntity->getConocimientoNombre();
            $pdf->SetX(11);
            $pdf->Cell(9.5, 0.35, $conocimientoNombre, $bordes, 1, 'L');                
        }
        
        $posConocimiento=$pdf->GetY();
        
        if ($posCompetencia>$posConocimiento) {
            $pdf->SetY($posCompetencia+0.5);
        } else {
            $pdf->SetY($posConocimiento+0.5);
        }
                        
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        //$pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "3. RESULTADOS EVALUACION", 0, 1, 'L');
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
                                                
        $pdf->SetX(1);
        $pdf->Cell(7, 0.35, "Competencias", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "NF", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "ED", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "LG", $bordes, 0, 'C');
        $pdf->Cell(0.5, 0.35, "", $bordes, 0, 'C');
        $pdf->Cell(7, 0.35, "Conocimientos", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "NF", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "ED", $bordes, 0, 'C');
        $pdf->Cell(0.85, 0.35, "LG", $bordes, 1, 'C');        
        $pdf->SetFont('Arial', '', 7);
                                        
        $arrBuscaPerfilCompetencia=array("perfilId"=>$perfilId);
        $perfilCompetenciaEntity = $em->getRepository("GtSistemaBundle:perfilCompetencia")->findBy($arrBuscaPerfilCompetencia);
        $posCompetencia=$pdf->GetY();
        foreach( $perfilCompetenciaEntity as $row ) {
            $competenciaId=$row->getCompetenciaId();
            $competenciaEntity=$em->getRepository("GtSistemaBundle:competencia")->find($competenciaId);
            $competenciaNombre=$competenciaEntity->getCompetenciaNombre();

            $pdf->SetX(1);
            $pdf->Cell(7, 0.35, $competenciaNombre, $bordes, 0, 'L');                

            $participanteCompetenciaNF=0;
            $participanteCompetenciaED=0;
            $participanteCompetenciaLG=0;
            $participanteCompetenciaERR=0;
        
            $arrBuscaParcicipante=array("evaluacionId"=>$evaluacionId, "perfilId"=>$perfilId);
            $parcitipanteEntity=$em->getRepository("GtSistemaBundle:participante")->findBy($arrBuscaParcicipante);
            foreach( $parcitipanteEntity as $rowParcipante ) {
                $participanteId=$rowParcipante->getId();
                
                $arrBuscaEvaluacionCompetencia=array("participanteId"=>$participanteId, "competenciaId"=>$competenciaId);
//                echo "<pre>";
//                echo print_r($arrBuscaEvaluacionCompetencia);
//                echo "</pre>";
                
                $evaluacionCompetenciaEntity=$em->getRepository("GtSistemaBundle:evaluacionCompetencia")->findOneBy($arrBuscaEvaluacionCompetencia);
                $evaluacionCompetenciaCumplimiento="";
                if (count($evaluacionCompetenciaEntity)>=1) {
                    $evaluacionCompetenciaRespuesta=$evaluacionCompetenciaEntity->getEvaluacionCompetenciaRespuesta();

                    $evaluacionCompetenciaRespuesta=round($evaluacionCompetenciaRespuesta,2);
                    if ($evaluacionCompetenciaRespuesta<=2.75) {
                        //$evaluacionCompetenciaCumplimiento="Necesita Formacion";
                        $participanteCompetenciaNF++;
                    } elseif ($evaluacionCompetenciaRespuesta>=2.76 && $evaluacionCompetenciaRespuesta<=3.60) {
                        //$evaluacionCompetenciaCumplimiento="En Desarrollo";
                        $participanteCompetenciaED++;
                    } elseif ($evaluacionCompetenciaRespuesta>=3.61 && $evaluacionCompetenciaRespuesta>=4) {
                        //$evaluacionCompetenciaCumplimiento="Logrado";
                            $participanteCompetenciaLG++;                                
                    } else {
                        $participanteCompetenciaERR++;
                    }
                }
                
            }
            $pdf->Cell(0.85, 0.35, $participanteCompetenciaNF, $bordes, 0, 'L');
            $pdf->Cell(0.85, 0.35, $participanteCompetenciaED, $bordes, 0, 'L');
            $pdf->Cell(0.85, 0.35, $participanteCompetenciaLG, $bordes, 1, 'L');
            
        }
        
        $pdf->SetY($posCompetencia);
        
        
        $arrBuscaPerfilConocimiento=array("perfilId"=>$perfilId);
        $perfilConocimientoEntity = $em->getRepository("GtSistemaBundle:perfilConocimiento")->findBy($arrBuscaPerfilConocimiento);
        $posConocimiento=$pdf->GetY();
        foreach( $perfilConocimientoEntity as $row ) {
            $conocimientoId=$row->getConocimientoId();
            $conocimientoEntity=$em->getRepository("GtSistemaBundle:conocimiento")->find($conocimientoId);
            $conocimientoNombre=$conocimientoEntity->getConocimientoNombre();

            $pdf->SetX(11);
            $pdf->Cell(7, 0.35, $conocimientoNombre, $bordes, 0, 'L');                

            $participanteConocimientoNF=0;
            $participanteConocimientoED=0;
            $participanteConocimientoLG=0;
            $participanteConocimientoERR=0;
        
            $arrBuscaParcicipante=array("evaluacionId"=>$evaluacionId, "perfilId"=>$perfilId);
            $parcitipanteEntity=$em->getRepository("GtSistemaBundle:participante")->findBy($arrBuscaParcicipante);
            foreach( $parcitipanteEntity as $rowParcipante ) {
                $participanteId=$rowParcipante->getId();
                
                $arrBuscaEvaluacionConocimiento=array("participanteId"=>$participanteId, "conocimientoId"=>$conocimientoId);
                
                $evaluacionConocimientoEntity=$em->getRepository("GtSistemaBundle:evaluacionConocimiento")->findOneBy($arrBuscaEvaluacionConocimiento);
                $evaluacionConocimientoCumplimiento="";
                if (count($evaluacionConocimientoEntity)>=1) {
                    $evaluacionConocimientoRespuesta=$evaluacionConocimientoEntity->getEvaluacionConocimientoRespuesta();

                    $evaluacionConocimientoRespuesta=round($evaluacionConocimientoRespuesta,2);
                    if ($evaluacionConocimientoRespuesta<=2.75) {
                        //$evaluacionConocimientoCumplimiento="Necesita Formacion";
                        $participanteConocimientoNF++;
                    } elseif ($evaluacionConocimientoRespuesta>=2.76 && $evaluacionConocimientoRespuesta<=3.60) {
                        //$evaluacionConocimientoCumplimiento="En Desarrollo";
                        $participanteConocimientoED++;
                    } elseif ($evaluacionConocimientoRespuesta>=3.61 && $evaluacionConocimientoRespuesta>=4) {
                        //$evaluacionConocimientoCumplimiento="Logrado";
                            $participanteConocimientoLG++;                                
                    } else {
                        $participanteConocimientoERR++;
                    }
                }
                
            }
            $pdf->Cell(0.85, 0.35, $participanteConocimientoNF, $bordes, 0, 'L');
            $pdf->Cell(0.85, 0.35, $participanteConocimientoED, $bordes, 0, 'L');
            $pdf->Cell(0.85, 0.35, $participanteConocimientoLG, $bordes, 1, 'L');            
        }
                      
        
        $pdf->SetX(1);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "4. REQUERIMIENTOS DE FORMACION", 0, 1, 'L');
        $pdf->SetX(1);
        $pdf->Cell(19.5, 0.35, "", 0, 1, 'C');
                
        $pdf->SetFont('Arial', '', 7);               
        $pdf->SetX(1);
        $pdf->Cell(16, 0.35, "Nombre del Curso", $bordes, 0, 'C');        
        $pdf->Cell(3.5, 0.35, "Horas", $bordes, 1, 'C');
        $pdf->SetX(1);
        
        
                                                
        $response = new Response($pdf->Output());
        
        //unlink($archivoRuta.$empresaImagenNombreTmp);                
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setCharset('UTF-8');
        $response->setCharset('ISO-8859-1');
        return $response;
        

    }
}
