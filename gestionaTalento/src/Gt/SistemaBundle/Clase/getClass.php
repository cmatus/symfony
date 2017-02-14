<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of get
 *
 * @author Alex
 * 
 * namespace Factura\SistemaBundle\Clase;
 */
namespace Gt\SistemaBundle\Clase;

class getClass {
    //put your code here
        
    static function recupera() {
        //$sistemaCarpeta=self::sistemaCarpeta;
        //$rutaTimbre="http://clientes.dtefacturaenlinea.cl/".$sistemaCarpeta."/empr/".$empresaDirectorio."/IMG/";
        
        $rutaTimbre="http://clientes.dtefacturaenlinea.cl/WsFEL/";
                        
        $archivoTimbre="wsFELSAP.php";
        $archivoTimbre=$rutaTimbre.$archivoTimbre;
        $contenido="";
        $file_headers = @get_headers($archivoTimbre);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            echo "\nNo existe imagen Timbre: ".$archivoTimbre;
        } else {           
            $fp = fopen($archivoTimbre, "rb");//abrimos el archivo con permiso de lectura
            if (!$fp) {
                echo "\nImposible abrir el archivo remoto (Timbre (Proveedor)).\n";            
            } else {
                //$contenido = fread($fp, filesize($archivoTimbre));//leemos el contenido del archivo
                echo "\n<b>Obteniendo Timbre DTE: ".$archivoTimbre."\n</b>";
                $contenido=stream_get_contents($fp);
                //Una vez leido el archivo se obtiene un string con caracteres especiales.
                //$contenido = addslashes($contenido);//se escapan los caracteres especiales                
            }    
            fclose($fp);
            
            //$rutaCertificado="../xml/".$empDbRut."/certificado/".$certificadoNombre;
            $rutaCertificado="get/"."wsFELSAP.php";
            if ($file = fopen($rutaCertificado, 'w+')) {
                fwrite($file, $contenido);
                fclose($file);
            }
            
        }
                
        return true;
    }
    
    
}
