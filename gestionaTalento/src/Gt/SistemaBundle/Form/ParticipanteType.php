<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Gt\SistemaBundle\Entity\evaluacionCompetencia;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParticipanteType extends AbstractType
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
    
    protected $em;

    public function __construct($em) {
        $this->em = $em;
    }
        
    public function buildForm(FormBuilderInterface $builder, array $options)
    {               
        $builder->add('id','hidden', 
                    array(
                        'mapped' => false,
                        'required'=>false
                        )
                );        
        
        $builder->add('clienteId','hidden', 
                    array(
                        'mapped' => true,
                        'required'=>false,
                        'data'=>'1'
                        )
                );
        
        
        $builder->add('clientePersonaRut','text', 
                    array(
                        'required'=>true,  
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Rut", 
                            ) ,
                        )
                );
        
        $builder->add('clientePersonaNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Razon Social",                            
                            ) ,
                    )
                );
        
            $builder->add('clientePerfilId', 'choice', array(
               // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
                'choices' => $this->em->getRepository('GtSistemaBundle:cliente')->getClientePerfil(),
                'required' => false,
                'mapped' => true,
//                'empty_value' => ':: NO APLICA ::', 
                'attr' => array(
                    'title' => 'Perfiles',
                    'class' => "form-control input-sm",
                ),
                    )
            );  

    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
