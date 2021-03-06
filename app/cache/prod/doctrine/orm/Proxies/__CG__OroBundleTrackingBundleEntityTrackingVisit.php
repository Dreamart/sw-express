<?php

namespace Proxies\__CG__\Oro\Bundle\TrackingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrackingVisit extends \Oro\Bundle\TrackingBundle\Entity\TrackingVisit implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'trackingWebsite', 'visitorUid', 'userIdentifier', 'firstActionTime', 'lastActionTime', 'parsedUID', 'identifierDetected', 'parsingCount', 'ip', 'client', 'clientVersion', 'clientType', 'os', 'osVersion', 'desktop', 'mobile', 'bot', 'customer_ff3bb796');
        }

        return array('__isInitialized__', 'id', 'trackingWebsite', 'visitorUid', 'userIdentifier', 'firstActionTime', 'lastActionTime', 'parsedUID', 'identifierDetected', 'parsingCount', 'ip', 'client', 'clientVersion', 'clientType', 'os', 'osVersion', 'desktop', 'mobile', 'bot', 'customer_ff3bb796');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrackingVisit $proxy) {
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
    public function getTrackingWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingWebsite', array());

        return parent::getTrackingWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingWebsite($trackingWebsite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingWebsite', array($trackingWebsite));

        return parent::setTrackingWebsite($trackingWebsite);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisitorUid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisitorUid', array());

        return parent::getVisitorUid();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisitorUid($visitorUid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisitorUid', array($visitorUid));

        return parent::setVisitorUid($visitorUid);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', array());

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', array($ip));

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', array());

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserIdentifier($userIdentifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserIdentifier', array($userIdentifier));

        return parent::setUserIdentifier($userIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstActionTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstActionTime', array());

        return parent::getFirstActionTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstActionTime(\DateTime $firstActionTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstActionTime', array($firstActionTime));

        return parent::setFirstActionTime($firstActionTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastActionTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastActionTime', array());

        return parent::getLastActionTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastActionTime(\DateTime $lastActionTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastActionTime', array($lastActionTime));

        return parent::setLastActionTime($lastActionTime);
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
    public function getParsedUID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParsedUID', array());

        return parent::getParsedUID();
    }

    /**
     * {@inheritDoc}
     */
    public function setParsedUID($parsedUID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParsedUID', array($parsedUID));

        return parent::setParsedUID($parsedUID);
    }

    /**
     * {@inheritDoc}
     */
    public function isIdentifierDetected()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIdentifierDetected', array());

        return parent::isIdentifierDetected();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifierDetected($identifierDetected)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifierDetected', array($identifierDetected));

        return parent::setIdentifierDetected($identifierDetected);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', array());

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient($client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', array($client));

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getOs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOs', array());

        return parent::getOs();
    }

    /**
     * {@inheritDoc}
     */
    public function setOs($os)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOs', array($os));

        return parent::setOs($os);
    }

    /**
     * {@inheritDoc}
     */
    public function isDesktop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDesktop', array());

        return parent::isDesktop();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesktop($desktop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesktop', array($desktop));

        return parent::setDesktop($desktop);
    }

    /**
     * {@inheritDoc}
     */
    public function isMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMobile', array());

        return parent::isMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', array($mobile));

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientVersion', array());

        return parent::getClientVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientVersion($clientVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientVersion', array($clientVersion));

        return parent::setClientVersion($clientVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientType', array());

        return parent::getClientType();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientType($clientType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientType', array($clientType));

        return parent::setClientType($clientType);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsVersion', array());

        return parent::getOsVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsVersion($osVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsVersion', array($osVersion));

        return parent::setOsVersion($osVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function isBot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBot', array());

        return parent::isBot();
    }

    /**
     * {@inheritDoc}
     */
    public function setBot($bot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBot', array($bot));

        return parent::setBot($bot);
    }

    /**
     * {@inheritDoc}
     */
    public function supportIdentifierTarget($targetClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportIdentifierTarget', array($targetClass));

        return parent::supportIdentifierTarget($targetClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifierTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifierTarget', array($target));

        return parent::setIdentifierTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerFf3bb796($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerFf3bb796', array($value));

        return parent::setCustomerFf3bb796($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifierTargetEntities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifierTargetEntities', array());

        return parent::getIdentifierTargetEntities();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifierTarget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifierTarget', array());

        return parent::getIdentifierTarget();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerFf3bb796()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerFf3bb796', array());

        return parent::getCustomerFf3bb796();
    }

}
