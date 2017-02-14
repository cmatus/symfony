<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PerfilType extends AbstractType
{
   
    
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
       
       
        
        $builder->add('perfilCodigo','hidden', 
                    array(
                        'required'=>false,  
                        'mapped' => false,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Codigo Perfil", 
                            ) ,
                        )
                );
        
        $builder->add('perfilNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"",                            
                            ) ,
                    )
                );
        
        $builder->add('perfilReporta','text',
                array(
                        'required'=>false ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"",                            
                            ) ,
                    )
                );
 
 
        $builder->add('perfilObjetivo','textarea',
                array(
                        'required'=>false ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Ingrese el objetivo del cargo",
                            'rows'=>"3",
                            ) ,
                    )
                );        
 
        $builder->add('perfilTareas','textarea',
                array(
                        'required'=>false ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Ingrese un listado de responsabilidades o tareas del cargo",
                            'rows'=>"5",
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
