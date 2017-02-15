<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
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
        
//        $builder->add('empresaId','text', 
//                    array(
//                        'mapped' => true,
//                        'required'=>false,
//                        'data'=>'1'
//                        )
//                );
        
        $builder->add('empresaRut','text', 
                    array(
                        'required'=>true,  
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Rut", 
                            ) ,
                        )
                );
        
        $builder->add('empresaRazonSocial','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Razon Social",                            
                            ) ,
                    )
                );
        
        $builder->add('empresaDireccion','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Direccion",                            
                            ) ,
                    )
                );
        
        $builder->add('empresaGiro','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Giro",                            
                            ),
                    )
                );        
        $builder->add('empresaContactoNombre','text',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Nombre Contacto",                            
                            ),
                    )
                );                
        
        $builder->add('empresaContactoCorreo','email',
                array(
                        'required'=>true ,
                        'attr'=> array(
                            'class'=>"form-control input-sm",
                            'placeholder'=>"Correo Contacto",                            
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
