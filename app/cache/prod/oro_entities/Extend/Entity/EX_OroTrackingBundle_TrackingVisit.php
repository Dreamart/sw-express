<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingVisit implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $customer_ff3bb796;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportIdentifierTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return true; }
        return false;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setIdentifierTarget($target)
    {
        if (null === $target) { $this->resetIdentifierTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { $this->resetIdentifierTargets(); $this->customer_ff3bb796 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setCustomerFf3bb796($value)
    {
        $this->customer_ff3bb796 = $value; return $this;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getIdentifierTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->customer_ff3bb796;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        return $associationEntities;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getIdentifierTarget()
    {
        if (null !== $this->customer_ff3bb796) { return $this->customer_ff3bb796; }
        return null;
    }

    public function getCustomerFf3bb796()
    {
        return $this->customer_ff3bb796;
    }

    public function __construct()
    {
    }

    private function resetIdentifierTargets()
    {
        $this->customer_ff3bb796 = null;
    }
}