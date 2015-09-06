<?php

namespace Proxies\__CG__\OroCRM\Bundle\SalesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SalesFunnel extends \OroCRM\Bundle\SalesBundle\Entity\SalesFunnel implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'startDate', 'owner', 'lead', 'opportunity', 'createdAt', 'updatedAt', 'workflowItem', 'workflowStep', 'organization', 'dataChannel');
        }

        return array('__isInitialized__', 'id', 'startDate', 'owner', 'lead', 'opportunity', 'createdAt', 'updatedAt', 'workflowItem', 'workflowStep', 'organization', 'dataChannel');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SalesFunnel $proxy) {
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
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead($lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', array($lead));

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', array());

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunity($opportunity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunity', array($opportunity));

        return parent::setOpportunity($opportunity);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunity', array());

        return parent::getOpportunity();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', array());

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', array($startDate));

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', array());

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
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
    public function setWorkflowStep($workflowStep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowStep', array($workflowStep));

        return parent::setWorkflowStep($workflowStep);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowStep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowStep', array());

        return parent::getWorkflowStep();
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeSave', array());

        return parent::beforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function beforeUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeUpdate', array());

        return parent::beforeUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', array($organization));

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', array());

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', array());

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataChannel(\OroCRM\Bundle\ChannelBundle\Entity\Channel $channel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataChannel', array($channel));

        return parent::setDataChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataChannel', array());

        return parent::getDataChannel();
    }

}