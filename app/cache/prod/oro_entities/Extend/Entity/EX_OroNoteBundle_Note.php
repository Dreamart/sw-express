<?php

namespace Extend\Entity;

abstract class EX_OroNoteBundle_Note implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $opportunity_ec95a95f;
    protected $lead_5b29b7d2;
    protected $contact_6d50e87e;
    protected $account_a806e96b;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        return false;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setTarget($target)
    {
        if (null === $target) { $this->resetTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { $this->resetTargets(); $this->contact_6d50e87e = $target; return $this; }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { $this->resetTargets(); $this->account_a806e96b = $target; return $this; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { $this->resetTargets(); $this->lead_5b29b7d2 = $target; return $this; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { $this->resetTargets(); $this->opportunity_ec95a95f = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setOpportunityEc95a95f($value)
    {
        $this->opportunity_ec95a95f = $value; return $this;
    }

    public function setLead5b29b7d2($value)
    {
        $this->lead_5b29b7d2 = $value; return $this;
    }

    public function setContact6d50e87e($value)
    {
        $this->contact_6d50e87e = $value; return $this;
    }

    public function setAccountA806e96b($value)
    {
        $this->account_a806e96b = $value; return $this;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->contact_6d50e87e;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->account_a806e96b;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->lead_5b29b7d2;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->opportunity_ec95a95f;
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
    public function getTarget()
    {
        if (null !== $this->contact_6d50e87e) { return $this->contact_6d50e87e; }
        if (null !== $this->account_a806e96b) { return $this->account_a806e96b; }
        if (null !== $this->lead_5b29b7d2) { return $this->lead_5b29b7d2; }
        if (null !== $this->opportunity_ec95a95f) { return $this->opportunity_ec95a95f; }
        return null;
    }

    public function getOpportunityEc95a95f()
    {
        return $this->opportunity_ec95a95f;
    }

    public function getLead5b29b7d2()
    {
        return $this->lead_5b29b7d2;
    }

    public function getContact6d50e87e()
    {
        return $this->contact_6d50e87e;
    }

    public function getAccountA806e96b()
    {
        return $this->account_a806e96b;
    }

    public function __construct()
    {
    }

    private function resetTargets()
    {
        $this->contact_6d50e87e = null;
        $this->account_a806e96b = null;
        $this->lead_5b29b7d2 = null;
        $this->opportunity_ec95a95f = null;
    }
}