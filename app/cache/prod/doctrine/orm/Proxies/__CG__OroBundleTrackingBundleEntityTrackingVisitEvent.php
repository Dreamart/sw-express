<?php

namespace Proxies\__CG__\Oro\Bundle\TrackingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrackingVisitEvent extends \Oro\Bundle\TrackingBundle\Entity\TrackingVisitEvent implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'visit', 'event', 'webEvent', 'website', 'parsingCount', 'product_c1803ccc', 'order_23867b17', 'customer_bb9e15ff', 'cart_72e8ef17', 'campaign_cb6118ed');
        }

        return array('__isInitialized__', 'id', 'visit', 'event', 'webEvent', 'website', 'parsingCount', 'product_c1803ccc', 'order_23867b17', 'customer_bb9e15ff', 'cart_72e8ef17', 'campaign_cb6118ed');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrackingVisitEvent $proxy) {
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
    public function getVisit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisit', array());

        return parent::getVisit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisit($visit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisit', array($visit));

        return parent::setVisit($visit);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebEvent', array());

        return parent::getWebEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebEvent($webEvent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebEvent', array($webEvent));

        return parent::setWebEvent($webEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', array());

        return parent::getEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvent($event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvent', array($event));

        return parent::setEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getParsingCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParsingCount', array());

        return parent::getParsingCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setParsingCount($parsingCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParsingCount', array($parsingCount));

        return parent::setParsingCount($parsingCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', array());

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', array($website));

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function supportAssociationTarget($targetClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportAssociationTarget', array($targetClass));

        return parent::supportAssociationTarget($targetClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductC1803ccc($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductC1803ccc', array($value));

        return parent::setProductC1803ccc($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder23867b17($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder23867b17', array($value));

        return parent::setOrder23867b17($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerBb9e15ff($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerBb9e15ff', array($value));

        return parent::setCustomerBb9e15ff($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setCart72e8ef17($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCart72e8ef17', array($value));

        return parent::setCart72e8ef17($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaignCb6118ed($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampaignCb6118ed', array($value));

        return parent::setCampaignCb6118ed($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductC1803ccc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductC1803ccc', array());

        return parent::getProductC1803ccc();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder23867b17()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder23867b17', array());

        return parent::getOrder23867b17();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerBb9e15ff()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerBb9e15ff', array());

        return parent::getCustomerBb9e15ff();
    }

    /**
     * {@inheritDoc}
     */
    public function getCart72e8ef17()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCart72e8ef17', array());

        return parent::getCart72e8ef17();
    }

    /**
     * {@inheritDoc}
     */
    public function getCampaignCb6118ed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampaignCb6118ed', array());

        return parent::getCampaignCb6118ed();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationTargets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociationTargets', array());

        return parent::getAssociationTargets();
    }

    /**
     * {@inheritDoc}
     */
    public function addAssociationTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociationTarget', array($target));

        return parent::addAssociationTarget($target);
    }

}
