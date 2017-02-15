<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',
                array(
                        'max_length'=>40,
                        'attr'=> array(
                            'size'=>40
                            ) ,
                    )
                )
            ->add('password','password',
                array(
                        'max_length'=>40,
                        'attr'=> array(
                            'size'=>40
                            ) ,
                    )
                )
            //->add('usuarioNombre','hidden',array('data'=>'xxx'))
            //->add('usuarioApellidos','hidden',array('data'=>'xxx'))
            //->add('usuarioRut','hidden',array('data'=>'xxx'))
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    //{
    //    $resolver->setDefaults(array(
    //        'data_class' => 'Login\SistemaBundle\Entity\usuario'
    //    ));
    //}

    /**
     * @return string
     */
    public function getName()
    {
        return 'thisform';
    }
}
