<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\evaluacionActividadClave;
use Gt\SistemaBundle\Entity\evaluacionCriterio;

//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionActividadClaveType extends AbstractType
{
   
    
    /**
     * Almacena el entity manager
     * @var Doctrine\ORM\EntityManager $em
     */
    protected $em;
    protected $preguntaTipo;
    protected $evaluacionPaso;

    
        
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {                                    
            $builder->add('actividadClaveId', 'hidden', array(
                'label' => '',
                'required' => false,
                //'data'=>$competenciaNombre,
                'attr' => array (),
            ));
            

            $builder->add('evaluacionCriterios', 'collection', array(
                'type' => new EvaluacionCriterioType(),                
                'by_reference' => false,
                'prototype' => new evaluacionCriterio(),
                'allow_delete' => true,
                'allow_add' => true,                
                )
            );
                                
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gt\SistemaBundle\Entity\evaluacionActividadClave'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formEvaluacionActividadClave';
    }
}
