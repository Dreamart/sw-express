<?php

namespace Proxies\__CG__\OroCRM\Bundle\MagentoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderItem extends \OroCRM\Bundle\MagentoBundle\Entity\OrderItem implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'order', 'productType', 'productOptions', 'isVirtual', 'originalPrice', 'discountPercent', 'owner', 'cost', 'id', 'name', 'sku', 'qty', 'price', 'weight', 'taxPercent', 'taxAmount', 'discountAmount', 'rowTotal', 'channel', 'originId');
        }

        return array('__isInitialized__', 'order', 'productType', 'productOptions', 'isVirtual', 'originalPrice', 'discountPercent', 'owner', 'cost', 'id', 'name', 'sku', 'qty', 'price', 'weight', 'taxPercent', 'taxAmount', 'discountAmount', 'rowTotal', 'channel', 'originId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderItem $proxy) {
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
    public function setOriginalPrice($originalPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalPrice', array($originalPrice));

        return parent::setOriginalPrice($originalPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalPrice', array());

        return parent::getOriginalPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductOptions($productOptions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductOptions', array($productOptions));

        return parent::setProductOptions($productOptions);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductOptions', array());

        return parent::getProductOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductType($productType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductType', array($productType));

        return parent::setProductType($productType);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductType', array());

        return parent::getProductType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVirtual($isVirtual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVirtual', array($isVirtual));

        return parent::setIsVirtual($isVirtual);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsVirtual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsVirtual', array());

        return parent::getIsVirtual();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountPercent($discountPercent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountPercent', array($discountPercent));

        return parent::setDiscountPercent($discountPercent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountPercent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountPercent', array());

        return parent::getDiscountPercent();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Oro\Bundle\OrganizationBundle\Entity\Organization $owner = NULL)
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
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
    public function setCost($cost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCost', array($cost));

        return parent::setCost($cost);
    }

    /**
     * {@inheritDoc}
     */
    public function getCost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCost', array());

        return parent::getCost();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountAmount($discountAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountAmount', array($discountAmount));

        return parent::setDiscountAmount($discountAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountAmount', array());

        return parent::getDiscountAmount();
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setQty($qty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQty', array($qty));

        return parent::setQty($qty);
    }

    /**
     * {@inheritDoc}
     */
    public function getQty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQty', array());

        return parent::getQty();
    }

    /**
     * {@inheritDoc}
     */
    public function setRowTotal($rowTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRowTotal', array($rowTotal));

        return parent::setRowTotal($rowTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getRowTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRowTotal', array());

        return parent::getRowTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setSku($sku)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSku', array($sku));

        return parent::setSku($sku);
    }

    /**
     * {@inheritDoc}
     */
    public function getSku()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSku', array());

        return parent::getSku();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxAmount($taxAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxAmount', array($taxAmount));

        return parent::setTaxAmount($taxAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxAmount', array());

        return parent::getTaxAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxPercent($taxPercent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxPercent', array($taxPercent));

        return parent::setTaxPercent($taxPercent);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxPercent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxPercent', array());

        return parent::getTaxPercent();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', array($weight));

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', array());

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Oro\Bundle\BusinessEntitiesBundle\Entity\BaseOrder $order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', array($order));

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', array());

        return parent::getOrder();
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

}