<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModuloType extends AbstractType
{
//    var $idEmpresa ; 
//    var $em ; 
//    var $idTipoEntidad;
//    public function __construct($p) {
//        $this->idEmpresa = $p['idEmpresa'];
//        $this->em = $p['em'];
//        $this->idTipoEntidad = $p['idTipoEntidad'];
//    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('id','hidden', 
                    array(
                         'mapped' => false,
                        'required'=>false
                        )
                );        

        $builder->add('moduloCodigo','text', 
                    array(
                        'required'=>true,  
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Codigo Modulo", 
                            ) ,
                        )
                );
        
        $builder->add('moduloNombre','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Modulo",                            
                            ) ,
                    )
                );
        $builder->add('moduloObjetivo','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Objetivo Modulo",
                            'rows'=>"10",
                            ) ,
                    )
                );        
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
