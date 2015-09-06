<?php

namespace Proxies\__CG__\Oro\Bundle\WorkflowBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class WorkflowEntityAcl extends \Oro\Bundle\WorkflowBundle\Entity\WorkflowEntityAcl implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'definition', 'attribute', 'step', 'entityClass', 'updatable', 'deletable');
        }

        return array('__isInitialized__', 'id', 'definition', 'attribute', 'step', 'entityClass', 'updatable', 'deletable');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (WorkflowEntityAcl $proxy) {
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
    public function setDefinition(\Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition $definition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefinition', array($definition));

        return parent::setDefinition($definition);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefinition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefinition', array());

        return parent::getDefinition();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute($attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttribute', array($attribute));

        return parent::setAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttribute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttribute', array());

        return parent::getAttribute();
    }

    /**
     * {@inheritDoc}
     */
    public function setStep($step)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStep', array($step));

        return parent::setStep($step);
    }

    /**
     * {@inheritDoc}
     */
    public function getStep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStep', array());

        return parent::getStep();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeStepKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeStepKey', array());

        return parent::getAttributeStepKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntityClass($className)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntityClass', array($className));

        return parent::setEntityClass($className);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityClass', array());

        return parent::getEntityClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletable($deletable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletable', array($deletable));

        return parent::setDeletable($deletable);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeletable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeletable', array());

        return parent::isDeletable();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatable($updatable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatable', array($updatable));

        return parent::setUpdatable($updatable);
    }

    /**
     * {@inheritDoc}
     */
    public function isUpdatable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUpdatable', array());

        return parent::isUpdatable();
    }

    /**
     * {@inheritDoc}
     */
    public function import(\Oro\Bundle\WorkflowBundle\Entity\WorkflowEntityAcl $acl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'import', array($acl));

        return parent::import($acl);
    }

}
