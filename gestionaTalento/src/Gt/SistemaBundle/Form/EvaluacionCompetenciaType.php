<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\evaluacionCompetencia;
use Gt\SistemaBundle\Entity\evaluacionPregunta;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionCompetenciaType extends AbstractType
{
   
    
      /**
     * Almacena el entity manager
     * @var Doctrine\ORM\EntityManager $em
     */
    protected $em;
    protected $preguntaTipo;
    protected $evaluacionPaso;

    /**
     * Constructor de la clase
     * @param Doctrine\ORM\EntityManager $em
     */
    public function __construct($evaluacionPaso, $preguntaTipo) {
        //$this->em = $em;
        $this->preguntaTipo = $preguntaTipo;
        $this->evaluacionPaso= $evaluacionPaso;
        //$this->competenciaId = $competenciaId;    
    }

        
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                    
                
            $builder->add('competenciaId', 'hidden', array(
                'label' => '',
                'required' => false,
                //'data'=>$competenciaNombre,
                'attr' => array (),
            ));
            
//             $builder->add('evaluacionCompetenciaRespuesta', 'choice', array(
//                'choices'   => array(
//                    '1' => 'Formacion',
//                    '2' => 'Desarrollo',
//                    '3' => 'Logrado',
//                ),
//                'multiple'  => false,
//                'expanded' => true,
//                'required' => true
//            ));
                 
        
//            $builder->add('competenciaNombre', null, array(
//                'label' => 'xxx',
//                'required' => false,
//                'mapped' => true,
//                //'data'=>$competenciaNombre,
//                'attr' => array ('style'=>'border:none; width:400px; background-color:transparent;'),
//            ));
        
//        if ($this->evaluacionPaso=="1") {                
//            $builder->add('evaluacionCompetenciaRespuesta', 'choice', array(
//                'choices'   => array(
//                    '1' => 'Formacion',
//                    '2' => 'Desarrollo',
//                    '3' => 'Logrado',
//                ),
//                'multiple'  => false,
//                'expanded' => true,
//                'required' => true
//            ));
//        }
        
//        if ($this->evaluacionPaso=="2") {
//           // echo "Evaluacion paso 2<br>";
            $builder->add('evaluacionPreguntas', 'collection', array(
                'type' => new EvaluacionPreguntaType($this->preguntaTipo),                
                'by_reference' => false,
                'prototype' => new evaluacionPregunta(),
                'allow_delete' => true,
                'allow_add' => true,                
                )
            );
//        }                                  
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionCompetencia'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionCompetencia';
    }
}
