<?php

namespace MRF\ClientesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut')
            ->add('nombre')
            ->add('apellidoP')
            ->add('apellidoM')
            ->add('direccion')
            ->add('email', 'email')
            ->add('fono')
            ->add('save', 'submit', array('label' => 'Guardar Cliente'))    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\ClientesBundle\Entity\cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cliente';
    }
}
