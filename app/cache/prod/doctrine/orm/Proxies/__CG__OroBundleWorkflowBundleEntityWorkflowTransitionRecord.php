<?php

namespace Proxies\__CG__\Oro\Bundle\WorkflowBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class WorkflowTransitionRecord extends \Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'workflowItem', 'transitionName', 'stepFrom', 'stepTo', 'transitionDate');
        }

        return array('__isInitialized__', 'id', 'workflowItem', 'transitionName', 'stepFrom', 'stepTo', 'transitionDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (WorkflowTransitionRecord $proxy) {
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
    public function setStepFrom($stepFrom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStepFrom', array($stepFrom));

        return parent::setStepFrom($stepFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getStepFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStepFrom', array());

        return parent::getStepFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setStepTo($stepTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStepTo', array($stepTo));

        return parent::setStepTo($stepTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getStepTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStepTo', array());

        return parent::getStepTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransitionName($transitionName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransitionName', array($transitionName));

        return parent::setTransitionName($transitionName);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransitionName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransitionName', array());

        return parent::getTransitionName();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowItem($workflowItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowItem', array($workflowItem));

        return parent::setWorkflowItem($workflowItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowItem', array());

        return parent::getWorkflowItem();
    }

    /**
     * {@inheritDoc}
     */
    public function getTransitionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransitionDate', array());

        return parent::getTransitionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

}
