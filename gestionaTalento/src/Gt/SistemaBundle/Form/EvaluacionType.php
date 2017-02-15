<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionType extends AbstractType
{
    protected $em;

    public function __construct($em) {
        $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('id','hidden', 
                    array(
                         'mapped' => false,
                        'required'=>false
                        )
                );        

//        $builder->add('evaluacionCodigo','text', 
//                    array(
//                        'required'=>true,  
//                        'attr'=> array(
//                            'class'=>"form-control input-sm",
//                            'placeholder'=>"Codigo Evaluacion", 
//                            ) ,
//                        )
//                );
        
        $builder->add('evaluacionNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Proceso",                            
                            ) ,
                    )
                );
        $builder->add('evaluacionDefinicion','textarea',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Defincion Proceso",
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
