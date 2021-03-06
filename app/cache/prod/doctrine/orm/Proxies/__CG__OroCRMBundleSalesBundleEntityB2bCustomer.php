<?php

namespace Proxies\__CG__\OroCRM\Bundle\SalesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class B2bCustomer extends \OroCRM\Bundle\SalesBundle\Entity\B2bCustomer implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'name', 'lifetime', 'shippingAddress', 'billingAddress', 'account', 'contact', 'leads', 'opportunities', 'owner', 'organization', 'tags', 'createdAt', 'updatedAt', 'website', 'ticker_symbol', 'rating', 'ownership', 'employees', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'dataChannel');
        }

        return array('__isInitialized__', 'id', 'name', 'lifetime', 'shippingAddress', 'billingAddress', 'account', 'contact', 'leads', 'opportunities', 'owner', 'organization', 'tags', 'createdAt', 'updatedAt', 'website', 'ticker_symbol', 'rating', 'ownership', 'employees', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'dataChannel');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (B2bCustomer $proxy) {
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
    public function getLifetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLifetime', array());

        return parent::getLifetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLifetime($lifetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLifetime', array($lifetime));

        return parent::setLifetime($lifetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingAddress', array());

        return parent::getShippingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingAddress(\Oro\Bundle\AddressBundle\Entity\Address $shippingAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingAddress', array($shippingAddress));

        return parent::setShippingAddress($shippingAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getBillingAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBillingAddress', array());

        return parent::getBillingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setBillingAddress(\Oro\Bundle\AddressBundle\Entity\Address $billingAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBillingAddress', array($billingAddress));

        return parent::setBillingAddress($billingAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount', array());

        return parent::getAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount(\OroCRM\Bundle\AccountBundle\Entity\Account $account = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', array($account));

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', array());

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(\OroCRM\Bundle\ContactBundle\Entity\Contact $contact = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', array($contact));

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeads', array());

        return parent::getLeads();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeads(\Doctrine\Common\Collections\ArrayCollection $leads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeads', array($leads));

        return parent::setLeads($leads);
    }

    /**
     * {@inheritDoc}
     */
    public function addLead(\OroCRM\Bundle\SalesBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLead', array($lead));

        return parent::addLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLead(\OroCRM\Bundle\SalesBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLead', array($lead));

        return parent::removeLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunities', array());

        return parent::getOpportunities();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunities(\Doctrine\Common\Collections\ArrayCollection $opportunities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunities', array($opportunities));

        return parent::setOpportunities($opportunities);
    }

    /**
     * {@inheritDoc}
     */
    public function addOpportunity(\OroCRM\Bundle\SalesBundle\Entity\Opportunity $opportunity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOpportunity', array($opportunity));

        return parent::addOpportunity($opportunity);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOpportunity(\OroCRM\Bundle\SalesBundle\Entity\Opportunity $opportunity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOpportunity', array($opportunity));

        return parent::removeOpportunity($opportunity);
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
    public function setOwner(\Oro\Bundle\UserBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
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
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
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
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
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
    public function setWebsite($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', array($value));

        return parent::setWebsite($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setTickerSymbol($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTickerSymbol', array($value));

        return parent::setTickerSymbol($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setRating($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRating', array($value));

        return parent::setRating($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnership($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnership', array($value));

        return parent::setOwnership($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployees($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployees', array($value));

        return parent::setEmployees($value);
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
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', array());

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function getTickerSymbol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTickerSymbol', array());

        return parent::getTickerSymbol();
    }

    /**
     * {@inheritDoc}
     */
    public function getRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRating', array());

        return parent::getRating();
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnership', array());

        return parent::getOwnership();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployees', array());

        return parent::getEmployees();
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
