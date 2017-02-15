<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteCompetenciaType extends AbstractType
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
        
        $builder->add('empresaId','text', 
                    array(
                        'mapped' => true,
                        'required'=>false,
                        'data'=>'1'
                        )
                );

            $builder->add('clienteId','text', 
                    array(
                        'mapped' => true,
                        'required'=>true,
                        )
                );

        $builder->add('clienteCompetenciaCodigo','text', 
                    array(
                        'required'=>true,  
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Codigo Competencia", 
                            ) ,
                        )
                );
        
        $builder->add('clienteCompetenciaNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Competencia",                            
                            ) ,
                    )
                );
        $builder->add('clienteCompetenciaDefinicion','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Defincion Competencia",
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
