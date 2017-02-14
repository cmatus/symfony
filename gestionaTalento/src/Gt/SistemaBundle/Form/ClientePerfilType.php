<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientePerfilType extends AbstractType
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
       
        
        $builder->add('empresaId','text', 
                array(
                    'mapped'=>true,
                    'required'=>true,
                    )
            );
        
        $builder->add('clienteId','text', 
                array(
                    'mapped'=>true,
                    'required'=>true,
                    )
            );
       
        
        $builder->add('clientePerfilCodigo','text', 
                    array(
                        'required'=>false,  
                        'mapped' => false,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Codigo Perfil", 
                            ) ,
                        )
                );
        
        $builder->add('clientePerfilNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Perfil",                            
                            ) ,
                    )
                );
        $builder->add('clientePerfilDefinicion','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Defincion Perfil",
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
