<?php

namespace Proxies\__CG__\OroCRM\Bundle\MagentoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Customer extends \OroCRM\Bundle\MagentoBundle\Entity\Customer implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'gender', 'birthday', 'email', 'createdAt', 'updatedAt', 'website', 'store', 'createdIn', 'confirmed', 'guest', 'group', 'contact', 'account', 'addresses', 'carts', 'orders', 'isActive', 'vat', 'lifetime', 'currency', 'syncState', 'owner', 'organization', 'password', 'newsletterSubscriber', 'synced', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'channel', 'originId', 'dataChannel', 'recency', 'frequency', 'monetary');
        }

        return array('__isInitialized__', 'id', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'gender', 'birthday', 'email', 'createdAt', 'updatedAt', 'website', 'store', 'createdIn', 'confirmed', 'guest', 'group', 'contact', 'account', 'addresses', 'carts', 'orders', 'isActive', 'vat', 'lifetime', 'currency', 'syncState', 'owner', 'organization', 'password', 'newsletterSubscriber', 'synced', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'channel', 'originId', 'dataChannel', 'recency', 'frequency', 'monetary');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Customer $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
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
    public function setWebsite(\OroCRM\Bundle\MagentoBundle\Entity\Website $website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', array($website));

        return parent::setWebsite($website);
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
    public function getWebsiteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsiteName', array());

        return parent::getWebsiteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setStore(\OroCRM\Bundle\MagentoBundle\Entity\Store $store)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStore', array($store));

        return parent::setStore($store);
    }

    /**
     * {@inheritDoc}
     */
    public function getStore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStore', array());

        return parent::getStore();
    }

    /**
     * {@inheritDoc}
     */
    public function getStoreName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoreName', array());

        return parent::getStoreName();
    }

    /**
     * {@inheritDoc}
     */
    public function isConfirmed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConfirmed', array());

        return parent::isConfirmed();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmed($confirmed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmed', array($confirmed));

        return parent::setConfirmed($confirmed);
    }

    /**
     * {@inheritDoc}
     */
    public function isGuest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isGuest', array());

        return parent::isGuest();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuest($guest)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuest', array($guest));

        return parent::setGuest($guest);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedIn', array());

        return parent::getCreatedIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedIn($createdIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedIn', array($createdIn));

        return parent::setCreatedIn($createdIn);
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup(\OroCRM\Bundle\MagentoBundle\Entity\CustomerGroup $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', array($group));

        return parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', array());

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact($contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', array($contact));

        return parent::setContact($contact);
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
    public function setAccount($account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', array($account));

        return parent::setAccount($account);
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
    public function setVat($vat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVat', array($vat));

        return parent::setVat($vat);
    }

    /**
     * {@inheritDoc}
     */
    public function getVat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVat', array());

        return parent::getVat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarts($carts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarts', array($carts));

        return parent::setCarts($carts);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarts', array());

        return parent::getCarts();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', array());

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressByOriginId($originId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressByOriginId', array($originId));

        return parent::getAddressByOriginId($originId);
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
    public function getLifetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLifetime', array());

        return parent::getLifetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrency($currency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrency', array($currency));

        return parent::setCurrency($currency);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrency', array());

        return parent::getCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddress(\Oro\Bundle\AddressBundle\Entity\AbstractAddress $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddress', array($address));

        return parent::addAddress($address);
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
    public function setOwner(\Oro\Bundle\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($user));

        return parent::setOwner($user);
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
    public function getSyncState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSyncState', array());

        return parent::getSyncState();
    }

    /**
     * {@inheritDoc}
     */
    public function setSyncState($syncState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSyncState', array($syncState));

        return parent::setSyncState($syncState);
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
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setGeneratedPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeneratedPassword', array($password));

        return parent::setGeneratedPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeneratedPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeneratedPassword', array());

        return parent::getGeneratedPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletterSubscriber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletterSubscriber', array());

        return parent::getNewsletterSubscriber();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsSynced($synced)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsSynced', array($synced));

        return parent::setIsSynced($synced);
    }

    /**
     * {@inheritDoc}
     */
    public function isSynced()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSynced', array());

        return parent::isSynced();
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
    public function setNamePrefix($prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNamePrefix', array($prefix));

        return parent::setNamePrefix($prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getNamePrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNamePrefix', array());

        return parent::getNamePrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', array($firstName));

        return parent::setFirstName($firstName);
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
    public function setMiddleName($middleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleName', array($middleName));

        return parent::setMiddleName($middleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleName', array());

        return parent::getMiddleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', array($lastName));

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', array());

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameSuffix($nameSuffix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameSuffix', array($nameSuffix));

        return parent::setNameSuffix($nameSuffix);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameSuffix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameSuffix', array());

        return parent::getNameSuffix();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', array($gender));

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', array());

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', array($birthday));

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', array());

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
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
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
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
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
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
    public function resetAddresses($addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetAddresses', array($addresses));

        return parent::resetAddresses($addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddress(\Oro\Bundle\AddressBundle\Entity\AbstractAddress $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddress', array($address));

        return parent::removeAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresses', array());

        return parent::getAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function hasAddress(\Oro\Bundle\AddressBundle\Entity\AbstractAddress $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAddress', array($address));

        return parent::hasAddress($address);
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

    /**
     * {@inheritDoc}
     */
    public function getRecency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecency', array());

        return parent::getRecency();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecency($recency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecency', array($recency));

        return parent::setRecency($recency);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrequency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrequency', array());

        return parent::getFrequency();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrequency($frequency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrequency', array($frequency));

        return parent::setFrequency($frequency);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonetary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonetary', array());

        return parent::getMonetary();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonetary($monetary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonetary', array($monetary));

        return parent::setMonetary($monetary);
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginId($originId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginId', array($originId));

        return parent::setOriginId($originId);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginId', array());

        return parent::getOriginId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel(\Oro\Bundle\IntegrationBundle\Entity\Channel $integration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', array($integration));

        return parent::setChannel($integration);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', array());

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelName', array());

        return parent::getChannelName();
    }

}
