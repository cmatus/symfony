<?php

namespace Gt\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\Common\Persistence\ObjectManager;
use Gt\SistemaBundle\Form\DataTransformer\ArrayToCertificateTransform;
use Gt\SistemaBundle\Form\EventListener\ClearProductCertificatesSubscriber;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PreguntaClasificacionType extends AbstractType
{
    /**
     * @var ObjectManager $om
     */
    protected $om;
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new ArrayToCertificateTransform($this->om));
        $builder->addEventSubscriber(new ClearProductCertificatesSubscriber($this->om));
    }
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'choices' => $this->om->getRepository('GtSistemaBundle:clasificacion')->getChoices(),
                'auto' => false,
                'multiple' => true,
                'required' => true,
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return "choice";
    }
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "preguntaClasificacion";
    }
}
