<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ActividadClaveType extends AbstractType
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


        $builder->add('actividadClaveNombre','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"",                            
                            ) ,
                    )
                );
    
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'form_ActividadClave';
    }
}
