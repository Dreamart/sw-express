<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingVisitEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $product_c1803ccc;
    protected $order_23867b17;
    protected $customer_bb9e15ff;
    protected $cart_72e8ef17;
    protected $campaign_cb6118ed;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportAssociationTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'OroCRM\Bundle\CampaignBundle\Entity\Campaign') { return true; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Cart') { return true; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Product') { return true; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Order') { return true; }
        return false;
    }

    public function setProductC1803ccc($value)
    {
        $this->product_c1803ccc = $value; return $this;
    }

    public function setOrder23867b17($value)
    {
        $this->order_23867b17 = $value; return $this;
    }

    public function setCustomerBb9e15ff($value)
    {
        $this->customer_bb9e15ff = $value; return $this;
    }

    public function setCart72e8ef17($value)
    {
        $this->cart_72e8ef17 = $value; return $this;
    }

    public function setCampaignCb6118ed($value)
    {
        $this->campaign_cb6118ed = $value; return $this;
    }

    public function getProductC1803ccc()
    {
        return $this->product_c1803ccc;
    }

    public function getOrder23867b17()
    {
        return $this->order_23867b17;
    }

    public function getCustomerBb9e15ff()
    {
        return $this->customer_bb9e15ff;
    }

    public function getCart72e8ef17()
    {
        return $this->cart_72e8ef17;
    }

    public function getCampaignCb6118ed()
    {
        return $this->campaign_cb6118ed;
    }

    /**
     * Gets the entities this entity is associated with
     *
     * @return object[]
     */
    public function getAssociationTargets()
    {
        $targets = [];
        $entity = $this->campaign_cb6118ed;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->cart_72e8ef17;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->product_c1803ccc;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->customer_bb9e15ff;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->order_23867b17;
        if ($entity) {
            $targets[] = $entity;
        }
        return $targets;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addAssociationTarget($target)
    {
        if (null === $target) { $this->resetAssociationTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'OroCRM\Bundle\CampaignBundle\Entity\Campaign') { $this->campaign_cb6118ed = $target; return $this; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Cart') { $this->cart_72e8ef17 = $target; return $this; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Product') { $this->product_c1803ccc = $target; return $this; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { $this->customer_bb9e15ff = $target; return $this; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Order') { $this->order_23867b17 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function __construct()
    {
    }

    private function resetAssociationTargets()
    {
        $this->campaign_cb6118ed = null;
        $this->cart_72e8ef17 = null;
        $this->product_c1803ccc = null;
        $this->customer_bb9e15ff = null;
        $this->order_23867b17 = null;
    }
}