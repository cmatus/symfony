<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\preguntaCompetencia;

class PreguntaType extends AbstractType
{
    protected $em;
    protected $competenciaId;
    protected $conocimientoId;
    protected $empresaId;
    
    public function __construct($em, $empresaId, $preguntaTipoId, $competenciaId, $conocimientoId) {
        $this->em = $em;
        $this->preguntaTipoId=$preguntaTipoId;
        $this->competenciaId=$competenciaId;
        $this->conocimientoId=$conocimientoId;
        $this->empresaId=$empresaId;
    }
    
    
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
        
//        $builder->add('empresaId','hidden', 
//                    array(
//                        'mapped' => true,
//                        'required'=>false,
//                        'data'=>'2'
//                        )
//                );
        
        $builder->add('preguntaCodigo','hidden', 
                    array(
                        'required'=>true,   
                        'mapped' => true,
                        )
                );
        
        $builder->add('preguntaNombre','textarea',
                array(
                        'required'=>true,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Pregunta",
                            'rows'=>"3",
                            ) ,
                    )
                );
        
//        $builder->add('preguntaAsociada','hidden',
//                array(                       
//                        'required'=>true,                       
//                        'data'=> 'Competencia',
//                    )
//                );

//        $builder->add('preguntaTipoId', 'entity', 
//            array(
//                    'empty_value'=> ':: SELECCIONE ::',
//                    'class'      => 'GtSistemaBundle:preguntaTipo',
//                    'property'   => 'preguntaTipoNombre',
//                    'required'  => true,
//                    'attr'       => array(                                        
//                                        'style'=> 'width:650px;' ,
//                                        'onchange' => 'preguntaTipo(this.value)',
//                                        ),
//                ) 
//            );
//        
        
//        $builder->add('preguntaTipoId', 'choice', array(
//            'choices'  => array(1 => 'COMPETENCIA', 2 => 'CONOCIMIENTO'),
//            'required' => true,
//            
//            'data'=>$this->preguntaTipoId,
//            'attr'       => array(                                        
//                                'style'=> 'width:500px;' ,
//                                'onchange' => 'preguntaTipo(this.value)',
//                                'disabled'=>true,
//                                ),
//        ));

//        $builder->add('preguntaCompetencia', 'collection', array(
//                    'type' => new PreguntaCompetenciaType($this->em),
//                    'by_reference' => false,
//                    'prototype' => new preguntaCompetencia(),
//    //                'prototype' => true,
//                    'allow_delete' => true,
//                    'allow_add' => true,                
//                    )
//                );
        
        
        switch ($this->preguntaTipoId) {
            case "1":
                $builder->add('competenciaId', 'choice', array(
                    // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
                     'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListaCompetencia($this->empresaId),
                     'required' => true,
                     'mapped' => false,
                     'multiple' => false,
                    // 'empty_value' => ':: NO APLICA ::', 
                     'data' => '',
                     'attr' => array(
                         'title' => 'Competencias',                    
                         'class' => "form-control input-sm",                    
                     ),
                         )
                 ); 
                break;
            case "2":
                $builder->add('conocimientoId', 'choice', array(
                    // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
                     'choices' => $this->em->getRepository('GtSistemaBundle:conocimiento')->getChoiceListaConocimiento($this->empresaId),
                     'required' => true,
                     'mapped' => false,
                     'multiple' => false,
     //                'empty_value' => ':: NO APLICA ::', 
                     'data' => '',
                     'attr' => array(
                         'title' => 'Conocimientos',
                         'class' => "form-control input-sm",
                     ),
                         )
                 ); 
                break;
        }
        
        
         

//            $builder->add('preguntaClasificacionFormacion', 'checkbox', array(
//                'label' => '',
//                'required' => false,
//                'attr' => array ('aria-label'=>"chkClasificacion1"),
////                'attr' => array(
////                        'onchange'=>"fncSetCambio()",
////                        'autocomplete' => 'off',
////                        'style' => 'float: right;vertical-align: central;',
////                        'onclick' => 'Totales()',
////                        'readonly' => true,
////                    ),
//            ));

//            $builder->add('preguntaClasificacionDesarrollo', 'checkbox', array(
//                'label' => '',
//                'required' => false,
//                'attr' => array ('aria-label'=>"chkClasificacion2"),
//            ));

        
        $builder->add('clasificaciones', 'entity', array(
            'class' => 'GtSistemaBundle:clasificacion',
            'empty_value' => '-- Seleccione --',
            'required' => true,
            'multiple' => true,
            'expanded' => true,
            'label'     => '',
            
        ));
        

        
//        $builder->add('preguntaCompetencias', 'entity', array(
//            'class' => 'GtSistemaBundle:competencia',
//            'empty_value' => ':: Seleccione ::',
//            'required' => true,
//            'multiple' => false,
//            'expanded' => false,
//             'attr' => array(
//                    'title' => 'Competencias',                    
//                    'class' => "form-control input-sm",
//                ),
//            
//        ));
                
                
//         $builder->add('preguntaClasificaciones', new PreguntaClasificacionType($this->em), array(
//                'multiple' => true,
//                'expanded' => true,
//                'required' => false,
//            ));
                
//            $builder->add('preguntaClasificaciones', 'choice', array(
//                'choices'   => array(
//                    '1' => 'Formacion',
//                    '2' => 'Desarrollo',
//                    '3' => 'Logrado',
//                ),
//                'multiple'  => true,
//                'expanded' => true
//            ));
                        
//            $builder->add('preguntaClasificacionLogrado', 'checkbox', array(
//                'label' => '',
//                'required' => false,
//                'attr' => array ('aria-label'=>"chkClasificacion3"),
//            ));
                

//            $builder->add('preguntaClasificaciones', 'preguntaClasificacion', array(
//                    'multiple' => true,
//                    'required' => false,
//                ));
             
        
//        $builder->add(
//            $builder->create('preguntaCompetencia', 'form', array('by_reference' => true)) // ? => true or false
//                ->add('preguntaId', 'integer')
//                ->add('competenciaId', 'integer')
//        );
//    )
                
        
        
//        $builder->add('preguntaAsociada','choice',array(
//                    'expanded' => true,
//                    'choices' => array('Competencia' => 'Competencia', 'Conocimiento' => 'Conocimiento'),
//                    'data' => 'Competencia',
//                )
//            );
                
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
