<?php

namespace Gt\SistemaBundle\Form\DataTransformer;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use Gt\SistemaBundle\Entity\preguntaClasificacion;
use Symfony\Component\Form\DataTransformerInterface;

class ArrayToCertificateTransform implements DataTransformerInterface
{
    /**
     * @var ObjectManager $om
     */
    private $om;
    /**
     * Constructor
     *
     * @param ObjectManager $om
     */
    function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }
    /**
     * {@inheritdoc}
     */
    public function transform($values)
    {
        $classifications = array();
        if ($values) {
            /** @var Certificate $value */
            foreach ($values as $value) {
                if (true === $value->getAuto()) continue;
                $classifications[] = $value->getClassification()->getId();
            }
        }
        return $classifications;
    }
    /**
     * {@inheritdoc}
     */
    public function reverseTransform($selected)
    {
        $certificates = new ArrayCollection();
        if ($selected) {
            foreach($selected as $id) {
                $preguntaClasificacion = new preguntaClasificacion();
                //$certificate->setAuto(false);
                $preguntaClasificacion->setClasificacionId($this->om->getRepository('GtSistemaBundle:clasificacion')->find($id));
                $preguntaClasificaciones[] = $preguntaClasificacion;
            }
        }
        return $certificates;
    }
}