<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//use Gt\SistemaBundle\Entity\evaluacionPregunta;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionPreguntaType extends AbstractType
{
       
    
    protected $preguntaTipo;
    public function __construct($preguntaTipo)
    {
        $this->preguntaTipo = $preguntaTipo;
    }
    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
//        $builder->add('id','hidden', 
//                    array(
//                        'mapped' => false,
//                        'required'=>false
//                        )
//                );
                     
        $builder->add('preguntaId', 'hidden', array(
                'label' => '',
                'required' => false,
                //'data'=>$preguntaNombre,
                'attr' => array (),
            ));
        
//        $builder->add('preguntaCompetenciaNombre', 'textarea', array(
//                'label' => '',
//                'required' => false,
//                'mapped' => false,
//                //'data'=>$preguntaNombre,
//                'attr' => array ('rows' => '2', 'style'=>'border:none; width:550px'),
//            ));               

        
            $builder->add('evaluacionPreguntaRespuesta', 'choice', array(
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
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionPregunta'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionPreguntaCompetencia';
    }
}
