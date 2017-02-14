<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Gt\SistemaBundle\Entity\preguntaCompetencia;

class PreguntaCompetenciaType extends AbstractType
{
    protected $em;
    protected $competenciaId;    
    protected $empresaId;
    
    public function __construct($em, $empresaId, $competenciaId) {
        $this->em = $em;        
        $this->competenciaId=$competenciaId;        
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
        
//        $builder->add('preguntaCodigo','hidden', 
//                    array(
//                        'required'=>true,   
//                        'mapped' => true,
//                        )
//                );
        
        $builder->add('preguntaCompetenciaNombre','textarea',
                array(
                        'required'=>true,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Pregunta",
                            'rows'=>"3",
                            ) ,
                    )
                );
        

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
//                break;
//            case "2":
//                $builder->add('conocimientoId', 'choice', array(
//                    // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
//                     'choices' => $this->em->getRepository('GtSistemaBundle:conocimiento')->getChoiceListaConocimiento($this->empresaId),
//                     'required' => true,
//                     'mapped' => false,
//                     'multiple' => false,
//     //                'empty_value' => ':: NO APLICA ::', 
//                     'data' => '',
//                     'attr' => array(
//                         'title' => 'Conocimientos',
//                         'class' => "form-control input-sm",
//                     ),
//                         )
//                 ); 
//                break;
        //}
        
                
        
//        $builder->add('clasificaciones', 'entity', array(
//            'class' => 'GtSistemaBundle:clasificacion',
//            'empty_value' => '-- Seleccione --',
//            'required' => true,
//            'multiple' => true,
//            'expanded' => true,
//            'label'     => '',
//            
//        ));
        

                        
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'formPreguntaCompetencia';
    }
}
