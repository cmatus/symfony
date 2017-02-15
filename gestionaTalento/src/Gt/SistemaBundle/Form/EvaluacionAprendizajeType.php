<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//use Gt\SistemaBundle\Entity\evaluacionPregunta;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionAprendizajeType extends AbstractType
{
  
    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
                 
            $builder->add('aprendizajeId', 'hidden', array(
                'label' => '',
                'required' => false,
                //'data'=>$preguntaNombre,
                'attr' => array (),
            ));
        
       
            $builder->add('evaluacionAprendizajeRespuesta', 'choice', array(
                'choices'   => array(
                    '1'=>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4',
                    '0'=>'n/o',
                ),
                'multiple'  => false,
                'expanded' => true
            ));
                  
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionAprendizaje'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionAprendizaje';
    }
}
