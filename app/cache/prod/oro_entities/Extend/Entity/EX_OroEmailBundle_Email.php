<?php

namespace Extend\Entity;

abstract class EX_OroEmailBundle_Email implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    protected $user_d41b1c4b;
    protected $opportunity_c1908b8f;
    protected $lead_e5b9c444;
    protected $customer_14831de6;
    protected $contact_cdc90e7a;
    protected $case_entity_81e7ef35;
    protected $b2b_customer_22d81e5c;
    protected $account_89f0f6f;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
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

    public function setUserD41b1c4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_d41b1c4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_d41b1c4b = $value;
            return $this;
        }
        foreach ($this->user_d41b1c4b as $item) {
            $this->removeUserD41b1c4b($item);
        }
        foreach ($value as $item) {
            $this->addUserD41b1c4b($item);
        }
        return $this;
    }

    public function setOpportunityC1908b8f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_c1908b8f instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_c1908b8f = $value;
            return $this;
        }
        foreach ($this->opportunity_c1908b8f as $item) {
            $this->removeOpportunityC1908b8f($item);
        }
        foreach ($value as $item) {
            $this->addOpportunityC1908b8f($item);
        }
        return $this;
    }

    public function setLeadE5b9c444($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_e5b9c444 instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_e5b9c444 = $value;
            return $this;
        }
        foreach ($this->lead_e5b9c444 as $item) {
            $this->removeLeadE5b9c444($item);
        }
        foreach ($value as $item) {
            $this->addLeadE5b9c444($item);
        }
        return $this;
    }

    public function setCustomer14831de6($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_14831de6 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_14831de6 = $value;
            return $this;
        }
        foreach ($this->customer_14831de6 as $item) {
            $this->removeCustomer14831de6($item);
        }
        foreach ($value as $item) {
            $this->addCustomer14831de6($item);
        }
        return $this;
    }

    public function setContactCdc90e7a($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_cdc90e7a instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_cdc90e7a = $value;
            return $this;
        }
        foreach ($this->contact_cdc90e7a as $item) {
            $this->removeContactCdc90e7a($item);
        }
        foreach ($value as $item) {
            $this->addContactCdc90e7a($item);
        }
        return $this;
    }

    public function setCaseEntity81e7ef35($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_81e7ef35 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_81e7ef35 = $value;
            return $this;
        }
        foreach ($this->case_entity_81e7ef35 as $item) {
            $this->removeCaseEntity81e7ef35($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntity81e7ef35($item);
        }
        return $this;
    }

    public function setB2bCustomer22d81e5c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_22d81e5c instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_22d81e5c = $value;
            return $this;
        }
        foreach ($this->b2b_customer_22d81e5c as $item) {
            $this->removeB2bCustomer22d81e5c($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer22d81e5c($item);
        }
        return $this;
    }

    public function setAccount89f0f6f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_89f0f6f instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_89f0f6f = $value;
            return $this;
        }
        foreach ($this->account_89f0f6f as $item) {
            $this->removeAccount89f0f6f($item);
        }
        foreach ($value as $item) {
            $this->addAccount89f0f6f($item);
        }
        return $this;
    }

    public function removeUserD41b1c4b($value)
    {
        if ($this->user_d41b1c4b && $this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->removeElement($value);
        }
    }

    public function removeOpportunityC1908b8f($value)
    {
        if ($this->opportunity_c1908b8f && $this->opportunity_c1908b8f->contains($value)) {
            $this->opportunity_c1908b8f->removeElement($value);
        }
    }

    public function removeLeadE5b9c444($value)
    {
        if ($this->lead_e5b9c444 && $this->lead_e5b9c444->contains($value)) {
            $this->lead_e5b9c444->removeElement($value);
        }
    }

    public function removeCustomer14831de6($value)
    {
        if ($this->customer_14831de6 && $this->customer_14831de6->contains($value)) {
            $this->customer_14831de6->removeElement($value);
        }
    }

    public function removeContactCdc90e7a($value)
    {
        if ($this->contact_cdc90e7a && $this->contact_cdc90e7a->contains($value)) {
            $this->contact_cdc90e7a->removeElement($value);
        }
    }

    public function removeCaseEntity81e7ef35($value)
    {
        if ($this->case_entity_81e7ef35 && $this->case_entity_81e7ef35->contains($value)) {
            $this->case_entity_81e7ef35->removeElement($value);
        }
    }

    public function removeB2bCustomer22d81e5c($value)
    {
        if ($this->b2b_customer_22d81e5c && $this->b2b_customer_22d81e5c->contains($value)) {
            $this->b2b_customer_22d81e5c->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_cdc90e7a->contains($target)) { $this->contact_cdc90e7a->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_89f0f6f->contains($target)) { $this->account_89f0f6f->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_22d81e5c->contains($target)) { $this->b2b_customer_22d81e5c->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_e5b9c444->contains($target)) { $this->lead_e5b9c444->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_c1908b8f->contains($target)) { $this->opportunity_c1908b8f->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') {
            if ($this->customer_14831de6->contains($target)) { $this->customer_14831de6->removeElement($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_81e7ef35->contains($target)) { $this->case_entity_81e7ef35->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function removeAccount89f0f6f($value)
    {
        if ($this->account_89f0f6f && $this->account_89f0f6f->contains($value)) {
            $this->account_89f0f6f->removeElement($value);
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b->contains($target); }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return $this->contact_cdc90e7a->contains($target); }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return $this->account_89f0f6f->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_22d81e5c->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return $this->lead_e5b9c444->contains($target); }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_c1908b8f->contains($target); }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_14831de6->contains($target); }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_81e7ef35->contains($target); }
        return false;
    }

    public function getUserD41b1c4b()
    {
        return $this->user_d41b1c4b;
    }

    public function getOpportunityC1908b8f()
    {
        return $this->opportunity_c1908b8f;
    }

    public function getLeadE5b9c444()
    {
        return $this->lead_e5b9c444;
    }

    public function getCustomer14831de6()
    {
        return $this->customer_14831de6;
    }

    public function getContactCdc90e7a()
    {
        return $this->contact_cdc90e7a;
    }

    public function getCaseEntity81e7ef35()
    {
        return $this->case_entity_81e7ef35;
    }

    public function getB2bCustomer22d81e5c()
    {
        return $this->b2b_customer_22d81e5c;
    }

    /**
     * Gets entities of the given type associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b; }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') { return $this->contact_cdc90e7a; }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') { return $this->account_89f0f6f; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_22d81e5c; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') { return $this->lead_e5b9c444; }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_c1908b8f; }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_14831de6; }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_81e7ef35; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getActivityTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->user_d41b1c4b->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_cdc90e7a->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_89f0f6f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->b2b_customer_22d81e5c->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->lead_e5b9c444->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->opportunity_c1908b8f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_14831de6->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->case_entity_81e7ef35->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function getAccount89f0f6f()
    {
        return $this->account_89f0f6f;
    }

    public function addUserD41b1c4b($value)
    {
        if (!$this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->add($value);
        }
    }

    public function addOpportunityC1908b8f($value)
    {
        if (!$this->opportunity_c1908b8f->contains($value)) {
            $this->opportunity_c1908b8f->add($value);
        }
    }

    public function addLeadE5b9c444($value)
    {
        if (!$this->lead_e5b9c444->contains($value)) {
            $this->lead_e5b9c444->add($value);
        }
    }

    public function addCustomer14831de6($value)
    {
        if (!$this->customer_14831de6->contains($value)) {
            $this->customer_14831de6->add($value);
        }
    }

    public function addContactCdc90e7a($value)
    {
        if (!$this->contact_cdc90e7a->contains($value)) {
            $this->contact_cdc90e7a->add($value);
        }
    }

    public function addCaseEntity81e7ef35($value)
    {
        if (!$this->case_entity_81e7ef35->contains($value)) {
            $this->case_entity_81e7ef35->add($value);
        }
    }

    public function addB2bCustomer22d81e5c($value)
    {
        if (!$this->b2b_customer_22d81e5c->contains($value)) {
            $this->b2b_customer_22d81e5c->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_cdc90e7a->contains($target)) { $this->contact_cdc90e7a->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_89f0f6f->contains($target)) { $this->account_89f0f6f->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_22d81e5c->contains($target)) { $this->b2b_customer_22d81e5c->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_e5b9c444->contains($target)) { $this->lead_e5b9c444->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_c1908b8f->contains($target)) { $this->opportunity_c1908b8f->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\MagentoBundle\Entity\Customer') {
            if (!$this->customer_14831de6->contains($target)) { $this->customer_14831de6->add($target); }
            return $this;
        }
        if ($className === 'OroCRM\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_81e7ef35->contains($target)) { $this->case_entity_81e7ef35->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function addAccount89f0f6f($value)
    {
        if (!$this->account_89f0f6f->contains($value)) {
            $this->account_89f0f6f->add($value);
        }
    }

    public function __construct()
    {
        $this->user_d41b1c4b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_cdc90e7a = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_89f0f6f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_22d81e5c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_e5b9c444 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_c1908b8f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_14831de6 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_81e7ef35 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}