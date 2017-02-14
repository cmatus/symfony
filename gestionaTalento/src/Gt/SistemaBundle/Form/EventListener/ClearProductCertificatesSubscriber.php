<?php

namespace Gt\SistemaBundle\Form\EventListener;
use Gt\SistemaBundle\Entity\pregunta;
use Gt\SistemaBundle\Form\PreguntaType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ClearProductCertificatesSubscriber implements EventSubscriberInterface
{
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
    public static function getSubscribedEvents()
    {
        return array(FormEvents::POST_SUBMIT => 'postSubmit');
    }
    /**
     * Remove all certificates for one product
     *
     * @param FormEvent $event
     */
    public function postSubmit(FormEvent $event)
    {
            $request = $event->getForm();
            $entityPregunta=new pregunta();   
            $form = $event->createForm(new PreguntaType($om), $entityPregunta);
            $form->handleRequest($request);
            $form->bind($request);
            if ($form->isValid()) {
                $entityPregunta->setEmpresaId(1);
                $em->persist($entityPregunta);
                $em->flush();
            }
	    //$product = $event->getForm()->getParent()->getData();
           // $product = $event->getForm()->getParent()->getData();
            //echo "<pre>";
            //echo print_r($product);
           // echo "</pre>";
//	    if ($product && $product instanceof pregunta) {
//                echo "acaaaa";
//		    $this->om->persist( $product );
//		    $this->om->flush();
//		    $this->om->getRepository('GtSistemaBundle:preguntaClasificacion')->clearManualSelection( $product, $event->getData() );
//	    }
        
        //$this->om->persist($product = $event->getForm()->getParent()->getData());
        //$this->om->flush();
        $this->om->getRepository('GtSistemaBundle:preguntaClasificacion')->clearManualSelection( $product, $event->getData() );
    }
}