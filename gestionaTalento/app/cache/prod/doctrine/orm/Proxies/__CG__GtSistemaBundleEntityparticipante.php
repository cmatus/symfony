<?php

namespace Proxies\__CG__\Gt\SistemaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class participante extends \Gt\SistemaBundle\Entity\participante implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'id', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'perfilId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'personaId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionCompetencias', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionConocimientos');
        }

        return array('__isInitialized__', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'id', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'perfilId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'personaId', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionCompetencias', '' . "\0" . 'Gt\\SistemaBundle\\Entity\\participante' . "\0" . 'evaluacionConocimientos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (participante $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvaluacionId($evaluacionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvaluacionId', array($evaluacionId));

        return parent::setEvaluacionId($evaluacionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvaluacionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvaluacionId', array());

        return parent::getEvaluacionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerfilId($perfilId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerfilId', array($perfilId));

        return parent::setPerfilId($perfilId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfilId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfilId', array());

        return parent::getPerfilId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonaId($personaId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonaId', array($personaId));

        return parent::setPersonaId($personaId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonaId', array());

        return parent::getPersonaId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEvaluacionCompetencias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvaluacionCompetencias', array());

        return parent::getEvaluacionCompetencias();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvaluacionCompetencia(\Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvaluacionCompetencia', array($evaluacionCompetencia));

        return parent::addEvaluacionCompetencia($evaluacionCompetencia);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvaluacionCompetencia(\Gt\SistemaBundle\Entity\evaluacionCompetencia $evaluacionCompetencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvaluacionCompetencia', array($evaluacionCompetencia));

        return parent::removeEvaluacionCompetencia($evaluacionCompetencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvaluacionConocimientos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvaluacionConocimientos', array());

        return parent::getEvaluacionConocimientos();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvaluacionConocimiento', array($evaluacionConocimiento));

        return parent::addEvaluacionConocimiento($evaluacionConocimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvaluacionConocimiento(\Gt\SistemaBundle\Entity\evaluacionConocimiento $evaluacionConocimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvaluacionConocimiento', array($evaluacionConocimiento));

        return parent::removeEvaluacionConocimiento($evaluacionConocimiento);
    }

}