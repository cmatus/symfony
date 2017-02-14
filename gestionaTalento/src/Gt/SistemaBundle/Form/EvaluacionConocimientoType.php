<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\evaluacionAprendizaje;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionConocimientoType extends AbstractType
{

   
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
                     
        $builder->add('conocimientoId', 'hidden', array(
                'label' => '',
                'required' => false,
                //'data'=>$conocimientoNombre,
                'attr' => array (),
            ));
        
//        $builder->add('conocimientoNombre', null, array(
//                'label' => '',
//                'required' => false,
//                'mapped' => true,
//                //'data'=>$conocimientoNombre,
//                'attr' => array ('style'=>'border:none; width:200px; background-color:transparent;'),
//            ));               
//
//        if ($this->evaluacionPaso=="1") {
//            $builder->add('evaluacionConocimientoRespuesta', 'choice', array(
//                'choices'   => array(
//                    '1'   => 'Formacion',
//                    '2' => 'Desarrollo',
//                    '3'   => 'Logrado',
//                ),
//                'multiple'  => false,
//                'expanded' => true
//            ));
//        }
        
        //if ($this->evaluacionPaso=="3") {
            // echo "Evaluacion paso 2<br>";
             $builder->add('evaluacionAprendizajes', 'collection', array(
                 'type' => new EvaluacionAprendizajeType(),
                 'by_reference' => false,
                 'prototype' => new evaluacionAprendizaje(),
 //                'prototype' => true,
                 'allow_delete' => true,
                 'allow_add' => true,                
                 )
             );
        // }    
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionConocimiento'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionConocimiento';
    }
}
