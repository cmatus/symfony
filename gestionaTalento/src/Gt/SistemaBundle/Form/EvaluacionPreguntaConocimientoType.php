<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\evaluacionPreguntaConocimiento;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionPreguntaConocimientoType extends AbstractType
{
       
    
//    protected $preguntaTipo;
//    public function __construct($preguntaTipo)
//    {
//        $this->preguntaTipo = $preguntaTipo;
//    }
    
    
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
        
//        $builder->add('preguntaNombre', null, array(
//                'label' => '',
//                'required' => false,
//                'mapped' => true,
//                //'data'=>$preguntaNombre,
//                'attr' => array ('style'=>'border:none; width:600px; word-wrap: break-word;  word-break: break-word;'),
//            ));               

       
            $builder->add('evaluacionPreguntaConocimientoRespuesta', 'choice', array(
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
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionPreguntaConocimiento'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionPreguntaConocimiento';
    }
}
