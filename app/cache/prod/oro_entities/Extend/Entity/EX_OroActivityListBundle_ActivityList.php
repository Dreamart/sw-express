<?php

namespace Extend\Entity;

abstract class EX_OroActivityListBundle_ActivityList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $user_10c9f691;
    protected $opportunity_c8bd867a;
    protected $lead_272269fb;
    protected $customer_8fc2c3ea;
    protected $contact_e8d5b2ba;
    protected $case_entity_a4fb53f5;
    protected $b2b_customer_2bf513a9;
    protected $account_2d83b3af;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityListTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    public function setUser10c9f691($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_10c9f691 instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_10c9f691 = $value;
            return $this;
        }
        foreach ($this->user_10c9f691 as $item) {
            $this->removeUser10c9f691($item);
        }
        foreach ($value as $item) {
            $this->addUser10c9f691($item);
        }
        return $this;
    }

    public function setOpportunityC8bd867a($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_c8bd867a instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_c8bd867a = $value;
            return $this;
        }
        foreach ($this->opportunity_c8bd867a as $item) {
            $this->removeOpportunityC8bd867a($item);
        }
        foreach ($value as $item) {
            $this->addOpportunityC8bd867a($item);
        }
        return $this;
    }

    public function setLead272269fb($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_272269fb instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_272269fb = $value;
            return $this;
        }
        foreach ($this->lead_272269fb as $item) {
            $this->removeLead272269fb($item);
        }
        foreach ($value as $item) {
            $this->addLead272269fb($item);
        }
        return $this;
    }

    public function setCustomer8fc2c3ea($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_8fc2c3ea instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_8fc2c3ea = $value;
            return $this;
        }
        foreach ($this->customer_8fc2c3ea as $item) {
            $this->removeCustomer8fc2c3ea($item);
        }
        foreach ($value as $item) {
            $this->addCustomer8fc2c3ea($item);
        }
        return $this;
    }

    public function setContactE8d5b2ba($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_e8d5b2ba instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_e8d5b2ba = $value;
            return $this;
        }
        foreach ($this->contact_e8d5b2ba as $item) {
            $this->removeContactE8d5b2ba($item);
        }
        foreach ($value as $item) {
            $this->addContactE8d5b2ba($item);
        }
        return $this;
    }

    public function setCaseEntityA4fb53f5($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_a4fb53f5 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_a4fb53f5 = $value;
            return $this;
        }
        foreach ($this->case_entity_a4fb53f5 as $item) {
            $this->removeCaseEntityA4fb53f5($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityA4fb53f5($item);
        }
        return $this;
    }

    public function setB2bCustomer2bf513a9($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_2bf513a9 instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_2bf513a9 = $value;
            return $this;
        }
        foreach ($this->b2b_customer_2bf513a9 as $item) {
            $this->removeB2bCustomer2bf513a9($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer2bf513a9($item);
        }
        return $this;
    }

    public function setAccount2d83b3af($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_2d83b3af instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_2d83b3af = $value;
            return $this;
        }
        foreach ($this->account_2d83b3af as $item) {
            $this->removeAccount2d83b3af($item);
        }
        foreach ($value as $item) {
            $this->addAccount2d83b3af($item);
        }
        return $this;
    }

    public function removeUser10c9f691($value)
    {
        if ($this->user_10c9f691 && $this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->removeElement($value);
        }
    }

    public function removeOpportunityC8bd867a($value)
    {
        if ($this->opportunity_c8bd867a && $this->opportunity_c8bd867a->contains($value)) {
            $this->opportunity_c8bd867a->removeElement($value);
        }
    }

    public function removeLead272269fb($value)
    {
        if ($this->lead_272269fb && $this->lead_272269fb->contains($value)) {
            $this->lead_272269fb->removeElement($value);
        }
    }

    public function removeCustomer8fc2c3ea($value)
    {
        if ($this->customer_8fc2c3ea && $this->customer_8fc2c3ea->contains($value)) {
            $this->customer_8fc2c3ea->removeElement($value);
        }
    }

    public function removeContactE8d5b2ba($value)
    {
        if ($this->contact_e8d5b2ba && $this->contact_e8d5b2ba->contains($value)) {
            $this->contact_e8d5b2ba->removeElement($value);
        }
    }

    public function removeCaseEntityA4fb53f5($value)
    {
        if ($this->case_entity_a4fb53f5 && $this->case_entity_a4fb53f5->contains($value)) {
            $this->case_entity_a4fb53f5->removeElement($value);
        }
    }

    public function removeB2bCustomer2bf513a9($value)
    {
        if ($this->b2b_customer_2bf513a9 && $this->b2b_customer_2bf513a9->contains($value)) {
            $this->b2b_customer_2bf513a9->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_10c9f691->contains($target)) { $this->user_10c9f691->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_e8d5b2ba->contains($target)) { $this->contact_e8d5b2ba->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_2d83b3af->contains($target)) { $this->account_2d83b3af->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_2bf513a9->contains($target)) { $this->b2b_customer_2bf513a9->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_272269fb->contains($target)) { $this->lead_272269fb->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_c8bd867a->contains($target)) { $this->opportunity_c8bd867a->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') {
            if ($this->customer_8fc2c3ea->contains($target)) { $this->customer_8fc2c3ea->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_a4fb53f5->contains($target)) { $this->case_entity_a4fb53f5->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function removeAccount2d83b3af($value)
    {
        if ($this->account_2d83b3af && $this->account_2d83b3af->contains($value)) {
            $this->account_2d83b3af->removeElement($value);
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691->contains($target); }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return $this->contact_e8d5b2ba->contains($target); }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return $this->account_2d83b3af->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_2bf513a9->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return $this->lead_272269fb->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_c8bd867a->contains($target); }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_8fc2c3ea->contains($target); }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_a4fb53f5->contains($target); }
        return false;
    }

    public function getUser10c9f691()
    {
        return $this->user_10c9f691;
    }

    public function getOpportunityC8bd867a()
    {
        return $this->opportunity_c8bd867a;
    }

    public function getLead272269fb()
    {
        return $this->lead_272269fb;
    }

    public function getCustomer8fc2c3ea()
    {
        return $this->customer_8fc2c3ea;
    }

    public function getContactE8d5b2ba()
    {
        return $this->contact_e8d5b2ba;
    }

    public function getCaseEntityA4fb53f5()
    {
        return $this->case_entity_a4fb53f5;
    }

    public function getB2bCustomer2bf513a9()
    {
        return $this->b2b_customer_2bf513a9;
    }

    /**
     * Gets entities of the given type associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityListTargets($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691; }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return $this->contact_e8d5b2ba; }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return $this->account_2d83b3af; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_2bf513a9; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return $this->lead_272269fb; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_c8bd867a; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_8fc2c3ea; }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_a4fb53f5; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getActivityListTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->user_10c9f691->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_e8d5b2ba->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_2d83b3af->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->b2b_customer_2bf513a9->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->lead_272269fb->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->opportunity_c8bd867a->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_8fc2c3ea->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->case_entity_a4fb53f5->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function getAccount2d83b3af()
    {
        return $this->account_2d83b3af;
    }

    public function addUser10c9f691($value)
    {
        if (!$this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->add($value);
        }
    }

    public function addOpportunityC8bd867a($value)
    {
        if (!$this->opportunity_c8bd867a->contains($value)) {
            $this->opportunity_c8bd867a->add($value);
        }
    }

    public function addLead272269fb($value)
    {
        if (!$this->lead_272269fb->contains($value)) {
            $this->lead_272269fb->add($value);
        }
    }

    public function addCustomer8fc2c3ea($value)
    {
        if (!$this->customer_8fc2c3ea->contains($value)) {
            $this->customer_8fc2c3ea->add($value);
        }
    }

    public function addContactE8d5b2ba($value)
    {
        if (!$this->contact_e8d5b2ba->contains($value)) {
            $this->contact_e8d5b2ba->add($value);
        }
    }

    public function addCaseEntityA4fb53f5($value)
    {
        if (!$this->case_entity_a4fb53f5->contains($value)) {
            $this->case_entity_a4fb53f5->add($value);
        }
    }

    public function addB2bCustomer2bf513a9($value)
    {
        if (!$this->b2b_customer_2bf513a9->contains($value)) {
            $this->b2b_customer_2bf513a9->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_10c9f691->contains($target)) { $this->user_10c9f691->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_e8d5b2ba->contains($target)) { $this->contact_e8d5b2ba->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_2d83b3af->contains($target)) { $this->account_2d83b3af->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_2bf513a9->contains($target)) { $this->b2b_customer_2bf513a9->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_272269fb->contains($target)) { $this->lead_272269fb->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_c8bd867a->contains($target)) { $this->opportunity_c8bd867a->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') {
            if (!$this->customer_8fc2c3ea->contains($target)) { $this->customer_8fc2c3ea->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_a4fb53f5->contains($target)) { $this->case_entity_a4fb53f5->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function addAccount2d83b3af($value)
    {
        if (!$this->account_2d83b3af->contains($value)) {
            $this->account_2d83b3af->add($value);
        }
    }

    public function __construct()
    {
        $this->user_10c9f691 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_e8d5b2ba = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_2d83b3af = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_2bf513a9 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_272269fb = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_c8bd867a = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_8fc2c3ea = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_a4fb53f5 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}