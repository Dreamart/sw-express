<?php

namespace Proxies\__CG__\OroCRM\Bundle\ContactBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ContactAddress extends \OroCRM\Bundle\ContactBundle\Entity\ContactAddress implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'owner', 'types', 'primary', 'id', 'label', 'street', 'street2', 'city', 'postalCode', 'country', 'region', 'organization', 'regionText', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'created', 'updated');
        }

        return array('__isInitialized__', 'owner', 'types', 'primary', 'id', 'label', 'street', 'street2', 'city', 'postalCode', 'country', 'region', 'organization', 'regionText', 'namePrefix', 'firstName', 'middleName', 'lastName', 'nameSuffix', 'created', 'updated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ContactAddress $proxy) {
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
    public function setOwner(\OroCRM\Bundle\ContactBundle\Entity\Contact $owner = NULL)
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
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypes', array());

        return parent::getTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypes(\Doctrine\Common\Collections\Collection $types)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypes', array($types));

        return parent::setTypes($types);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeNames', array());

        return parent::getTypeNames();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeByName($typeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeByName', array($typeName));

        return parent::getTypeByName($typeName);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTypeWithName($typeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTypeWithName', array($typeName));

        return parent::hasTypeWithName($typeName);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeLabels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeLabels', array());

        return parent::getTypeLabels();
    }

    /**
     * {@inheritDoc}
     */
    public function addType(\Oro\Bundle\AddressBundle\Entity\AddressType $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addType', array($type));

        return parent::addType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeType(\Oro\Bundle\AddressBundle\Entity\AddressType $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeType', array($type));

        return parent::removeType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimary($primary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimary', array($primary));

        return parent::setPrimary($primary);
    }

    /**
     * {@inheritDoc}
     */
    public function isPrimary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPrimary', array());

        return parent::isPrimary();
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEmpty', array());

        return parent::isEmpty();
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
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', array($label));

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', array());

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', array($street));

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', array());

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet2($street2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet2', array($street2));

        return parent::setStreet2($street2);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet2', array());

        return parent::getStreet2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', array($region));

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', array());

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegionText($regionText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegionText', array($regionText));

        return parent::setRegionText($regionText);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionText', array());

        return parent::getRegionText();
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionName', array());

        return parent::getRegionName();
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionCode', array());

        return parent::getRegionCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniversalRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniversalRegion', array());

        return parent::getUniversalRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postalCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', array($postalCode));

        return parent::setPostalCode($postalCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', array());

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryName', array());

        return parent::getCountryName();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryIso3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryIso3', array());

        return parent::getCountryIso3();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryIso2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryIso2', array());

        return parent::getCountryIso2();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization($organization)
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
    public function setNamePrefix($namePrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNamePrefix', array($namePrefix));

        return parent::setNamePrefix($namePrefix);
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
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
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
    public function isRegionValid(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRegionValid', array($context));

        return parent::isRegionValid($context);
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
    public function isEqual($other)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEqual', array($other));

        return parent::isEqual($other);
    }

}
