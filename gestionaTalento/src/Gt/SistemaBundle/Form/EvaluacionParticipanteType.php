<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Gt\SistemaBundle\Entity\evaluacionCompetencia;
use Gt\SistemaBundle\Entity\evaluacionConocimiento;
use Gt\SistemaBundle\Entity\evaluacionPregunta;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluacionParticipanteType extends AbstractType
{
   
    /**
     * @var ObjectManager $evaluacionPaso
     */
    protected $evaluacionPaso;
    protected $preguntaTipo;
    public function __construct($evaluacionPaso, $preguntaTipo=null)
    {
        $this->evaluacionPaso = $evaluacionPaso;
        $this->preguntaTipo = $preguntaTipo;
    }
    
    
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
       
        //echo "paso:".$this->evaluacionPaso;
        
        switch ($this->evaluacionPaso) {
            case "2":        
                $builder->add('evaluacionCompetencias', 'collection', array(
                    'type' => new EvaluacionCompetenciaType($this->evaluacionPaso, $this->preguntaTipo),                
                    'by_reference' => false,
                    'prototype' => new evaluacionCompetencia(),
                    'allow_delete' => true,
                    'allow_add' => true,                
                    )
                );
                break;
            case "3":
                $builder->add('evaluacionConocimientos', 'collection', array(
                    'type' => new EvaluacionConocimientoType($this->evaluacionPaso, $this->preguntaTipo),                
                    'by_reference' => false,
                    'prototype' => new evaluacionConocimiento(),
                    'allow_delete' => true,
                    'allow_add' => true,                
                    )
                );
                break;
            default:
                
                $builder->add('evaluacionCompetencias', 'collection', array(
                    'type' => new EvaluacionCompetenciaType($this->evaluacionPaso, $this->preguntaTipo),                
                    'by_reference' => false,
                    'prototype' => new evaluacionCompetencia(),
                    'allow_delete' => true,
                    'allow_add' => true,                
                    )
                );
                
                $builder->add('evaluacionConocimientos', 'collection', array(
                    'type' => new EvaluacionConocimientoType($this->evaluacionPaso, $this->preguntaTipo),                
                    'by_reference' => false,
                    'prototype' => new evaluacionConocimiento(),
                    'allow_delete' => true,
                    'allow_add' => true,                
                    )
                );
                
                break;
        }
            //case "2":    
//                $builder->add('evaluacionPreguntas', 'collection', array(
//                    'type' => new EvaluacionPreguntaType($this->preguntaTipo),                
//                    'by_reference' => false,
//                    'prototype' => new evaluacionPregunta(),
//    //                'prototype' => true,
//                    'allow_delete' => true,
//                    'allow_add' => true,                
//                    )
//                );
        //        break;
            
        //}    
            
    }
    
   
    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
