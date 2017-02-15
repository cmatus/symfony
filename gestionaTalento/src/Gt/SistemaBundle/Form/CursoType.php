<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CursoType extends AbstractType
{
//    var $idEmpresa ; 
//    var $em ; 
//    var $idTipoEntidad;
//    public function __construct($p) {
//        $this->idEmpresa = $p['idEmpresa'];
//        $this->em = $p['em'];
//        $this->idTipoEntidad = $p['idTipoEntidad'];
//    }

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

        $builder->add('cursoCodigo','text', 
                    array(
                        'required'=>true,  
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Codigo Curso", 
                            ) ,
                        )
                );
        
        $builder->add('cursoNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre del Curso",                            
                            ) ,
                    )
                );
        $builder->add('cursoObjetivo','textarea',
                array(
                        'required'=>false ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Objetivo del curso",
                            'rows'=>"3",
                            ) ,
                    )
                );        
    }
    
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gt\SistemaBundle\Entity\curso'
        ));
    }
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
