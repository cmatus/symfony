<?php

namespace Gt\SistemaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class empresaRepository extends EntityRepository
{    

    public function getEmpresaLista()
    {          
        //$empresaId=$parametros["perfilId"];
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*
                FROM empresa A                
                ORDER BY A.empresaRazonSocial ";           
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['empresaRazonSocial'];
        }   
        return $choices;
    }

        
    public function getEmpresaPerfil()
    {          
        //$empresaId=$parametros["perfilId"];
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT A.*
                FROM empresaPerfil A                
                ORDER BY A.empresaPerfilNombre ";           
        
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['empresaPerfilNombre'];
        }   
        return $choices;
    }    
    
}
