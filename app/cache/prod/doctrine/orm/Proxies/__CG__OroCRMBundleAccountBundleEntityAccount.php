<?php

namespace Proxies\__CG__\OroCRM\Bundle\AccountBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Account extends \OroCRM\Bundle\AccountBundle\Entity\Account implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'name', 'owner', 'contacts', 'defaultContact', 'createdAt', 'updatedAt', 'tags', 'organization', 'referredBy', 'extend_description', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count');
        }

        return array('__isInitialized__', 'id', 'name', 'owner', 'contacts', 'defaultContact', 'createdAt', 'updatedAt', 'tags', 'organization', 'referredBy', 'extend_description', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Account $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
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
    public function setCreatedAt($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($created));

        return parent::setCreatedAt($created);
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
    public function setUpdatedAt($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updated));

        return parent::setUpdatedAt($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', array());

        return parent::getContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\OroCRM\Bundle\ContactBundle\Entity\Contact $contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', array($contact));

        return parent::addContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function setContacts(\Doctrine\Common\Collections\Collection $contacts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContacts', array($contacts));

        return parent::setContacts($contacts);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\OroCRM\Bundle\ContactBundle\Entity\Contact $contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', array($contact));

        return parent::removeContact($contact);
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
    public function beforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeSave', array());

        return parent::beforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function doPreUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'doPreUpdate', array());

        return parent::doPreUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaggableId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaggableId', array());

        return parent::getTaggableId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTags', array($tags));

        return parent::setTags($tags);
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
    public function setOwner($owningUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owningUser));

        return parent::setOwner($owningUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultContact($defaultContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultContact', array($defaultContact));

        return parent::setDefaultContact($defaultContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultContact', array());

        return parent::getDefaultContact();
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
    public function getReferredBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferredBy', array());

        return parent::getReferredBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferredBy(\OroCRM\Bundle\AccountBundle\Entity\Account $referredBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferredBy', array($referredBy));

        return parent::setReferredBy($referredBy);
    }

    /**
     * {@inheritDoc}
     */
    public function setExtendDescription($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtendDescription', array($value));

        return parent::setExtendDescription($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDateOut($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDateOut', array($value));

        return parent::setAcLastContactDateOut($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDateIn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDateIn', array($value));

        return parent::setAcLastContactDateIn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDate($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDate', array($value));

        return parent::setAcLastContactDate($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCountOut($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCountOut', array($value));

        return parent::setAcContactCountOut($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCountIn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCountIn', array($value));

        return parent::setAcContactCountIn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCount($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCount', array($value));

        return parent::setAcContactCount($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtendDescription', array());

        return parent::getExtendDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDateOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDateOut', array());

        return parent::getAcLastContactDateOut();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDateIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDateIn', array());

        return parent::getAcLastContactDateIn();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDate', array());

        return parent::getAcLastContactDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCountOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCountOut', array());

        return parent::getAcContactCountOut();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCountIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCountIn', array());

        return parent::getAcContactCountIn();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCount', array());

        return parent::getAcContactCount();
    }

}
