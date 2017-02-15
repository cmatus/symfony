<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompetenciaType extends AbstractType
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

//        $builder->add('competenciaCodigo','text', 
//                    array(
//                        'required'=>true,  
//                        'attr'=> array(
//                            'class'=>"form-control input-sm",
//                            'placeholder'=>"Codigo Competencia", 
//                            ) ,
//                        )
//                );
        
        $builder->add('competenciaNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Competencia",                            
                            ) ,
                    )
                );
        $builder->add('competenciaDefinicion','textarea',
                array(
                        'required'=>false ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Defincion Competencia",
                            'rows'=>"3",
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
