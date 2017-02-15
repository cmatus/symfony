<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
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
    protected $empresaId;
    public function __construct($em, $empresaId) {
        $this->em = $em;
        $this->empresaId= $empresaId;
    }
        
    public function buildForm(FormBuilderInterface $builder, array $options)
    {               
        $builder->add('id','hidden', 
                    array(
                        'mapped' => false,
                        'required'=>false
                        )
                );                        
        
//        $builder->add('personaRut','text', 
//                    array(
//                        'required'=>true,  
//                        'attr'=> array(
//                            'class'=>"form-control input-sm",
//                            'placeholder'=>"Rut", 
//                            ) ,
//                        )
//                );
        
        $builder->add('personaNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"",                            
                            ) ,
                    )
                );
        
        $builder->add('personaCorreo','email',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"",                            
                            ) ,
                    )
                );


            $builder->add('perfilId', 'choice', array(
               // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
                'choices' => $this->em->getRepository('GtSistemaBundle:perfil')->getListaPerfil($this->empresaId),
                'required' => true,
                'mapped' => true,
//                'empty_value' => ':: NO APLICA ::', 
                'attr' => array(
                    'required' => true,
                    'title' => 'Perfiles',
                    'class' => "form-control input-sm",
                ),
                    )
            );  
            
            
            $builder->add('personaId', 'choice', array(
               // 'choices' => $this->em->getRepository('GtSistemaBundle:competencia')->getChoiceListProductoFamilia(array('idEmpresa'=>$this->idEmpresa )),
                'choices' => $this->em->getRepository('GtSistemaBundle:persona')->getListaPersona($this->empresaId),
                'required' => false,
                'mapped' => true,
//                'empty_value' => ':: NO APLICA ::', 
                'attr' => array(
                    'title' => 'Personas',
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
