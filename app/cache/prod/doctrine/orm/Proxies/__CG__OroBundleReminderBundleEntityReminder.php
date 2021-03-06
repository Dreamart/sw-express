<?php

namespace Proxies\__CG__\Oro\Bundle\ReminderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reminder extends \Oro\Bundle\ReminderBundle\Entity\Reminder implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Oro\\Bundle\\ReminderBundle\\Entity\\Reminder' . "\0" . 'id', 'subject', 'startAt', 'expireAt', 'method', 'interval', 'intervalNumber', 'intervalUnit', 'state', 'relatedEntityId', 'relatedEntityClassName', 'recipient', 'sender', 'createdAt', 'updatedAt', 'sentAt', 'failureException');
        }

        return array('__isInitialized__', '' . "\0" . 'Oro\\Bundle\\ReminderBundle\\Entity\\Reminder' . "\0" . 'id', 'subject', 'startAt', 'expireAt', 'method', 'interval', 'intervalNumber', 'intervalUnit', 'state', 'relatedEntityId', 'relatedEntityClassName', 'recipient', 'sender', 'createdAt', 'updatedAt', 'sentAt', 'failureException');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reminder $proxy) {
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
    public function setSubject($subject)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', array($subject));

        return parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', array());

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function getStartAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartAt', array());

        return parent::getStartAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpireAt(\DateTime $expireAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpireAt', array($expireAt));

        return parent::setExpireAt($expireAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpireAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpireAt', array());

        return parent::getExpireAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethod($method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethod', array($method));

        return parent::setMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethod', array());

        return parent::getMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterval(\Oro\Bundle\ReminderBundle\Model\ReminderInterval $interval)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterval', array($interval));

        return parent::setInterval($interval);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterval()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterval', array());

        return parent::getInterval();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelatedEntityId($relatedEntityId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelatedEntityId', array($relatedEntityId));

        return parent::setRelatedEntityId($relatedEntityId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedEntityId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedEntityId', array());

        return parent::getRelatedEntityId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelatedEntityClassName($relatedEntityClassName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelatedEntityClassName', array($relatedEntityClassName));

        return parent::setRelatedEntityClassName($relatedEntityClassName);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedEntityClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedEntityClassName', array());

        return parent::getRelatedEntityClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipient(\Oro\Bundle\UserBundle\Entity\User $owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipient', array($owner));

        return parent::setRecipient($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipient', array());

        return parent::getRecipient();
    }

    /**
     * {@inheritDoc}
     */
    public function getSender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSender', array());

        return parent::getSender();
    }

    /**
     * {@inheritDoc}
     */
    public function setSender(\Oro\Bundle\UserBundle\Entity\User $sender = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSender', array($sender));

        return parent::setSender($sender);
    }

    /**
     * {@inheritDoc}
     */
    public function setReminderData(\Oro\Bundle\ReminderBundle\Model\ReminderDataInterface $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReminderData', array($data));

        return parent::setReminderData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
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
    public function setUpdatedAt(\DateTime $updatedAt)
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
    public function setSentAt(\DateTime $sentAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentAt', array($sentAt));

        return parent::setSentAt($sentAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentAt', array());

        return parent::getSentAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getFailureException()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFailureException', array());

        return parent::getFailureException();
    }

    /**
     * {@inheritDoc}
     */
    public function setFailureException(\Exception $e)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFailureException', array($e));

        return parent::setFailureException($e);
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
