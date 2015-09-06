<?php

namespace Proxies\__CG__\Oro\Bundle\EmailBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EmailFolder extends \Oro\Bundle\EmailBundle\Entity\EmailFolder implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'name', 'fullName', 'type', 'syncEnabled', 'parentFolder', 'subFolders', 'origin', 'synchronizedAt', 'outdatedAt', 'emailUsers');
        }

        return array('__isInitialized__', 'id', 'name', 'fullName', 'type', 'syncEnabled', 'parentFolder', 'subFolders', 'origin', 'synchronizedAt', 'outdatedAt', 'emailUsers');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EmailFolder $proxy) {
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
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', array());

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullName($fullName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullName', array($fullName));

        return parent::setFullName($fullName);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSyncEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSyncEnabled', array());

        return parent::isSyncEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setSyncEnabled($syncEnabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSyncEnabled', array($syncEnabled));

        return parent::setSyncEnabled($syncEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubFolders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubFolders', array());

        return parent::getSubFolders();
    }

    /**
     * {@inheritDoc}
     */
    public function hasSubFolders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasSubFolders', array());

        return parent::hasSubFolders();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubFolders($folders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubFolders', array($folders));

        return parent::setSubFolders($folders);
    }

    /**
     * {@inheritDoc}
     */
    public function addSubFolder(\Oro\Bundle\EmailBundle\Entity\EmailFolder $folder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubFolder', array($folder));

        return parent::addSubFolder($folder);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubFolder(\Oro\Bundle\EmailBundle\Entity\EmailFolder $folder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubFolder', array($folder));

        return parent::removeSubFolder($folder);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentFolder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentFolder', array());

        return parent::getParentFolder();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentFolder(\Oro\Bundle\EmailBundle\Entity\EmailFolder $folder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentFolder', array($folder));

        return parent::setParentFolder($folder);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigin', array());

        return parent::getOrigin();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigin(\Oro\Bundle\EmailBundle\Entity\EmailOrigin $origin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigin', array($origin));

        return parent::setOrigin($origin);
    }

    /**
     * {@inheritDoc}
     */
    public function getSynchronizedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynchronizedAt', array());

        return parent::getSynchronizedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSynchronizedAt($synchronizedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynchronizedAt', array($synchronizedAt));

        return parent::setSynchronizedAt($synchronizedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setOutdatedAt($outdatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutdatedAt', array($outdatedAt));

        return parent::setOutdatedAt($outdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutdatedAt', array());

        return parent::getOutdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isOutdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isOutdated', array());

        return parent::isOutdated();
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