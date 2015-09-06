<?php

namespace Proxies\__CG__\OroCRM\Bundle\TaskBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Task extends \OroCRM\Bundle\TaskBundle\Entity\Task implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'subject', 'description', 'dueDate', 'taskPriority', 'owner', 'workflowItem', 'workflowStep', 'reminders', 'createdAt', 'updatedAt', 'organization', 'opportunity_c1908b8f', 'lead_e5b9c444', 'customer_14831de6', 'contact_cdc90e7a', 'b2b_customer_22d81e5c', 'account_89f0f6f');
        }

        return array('__isInitialized__', 'id', 'subject', 'description', 'dueDate', 'taskPriority', 'owner', 'workflowItem', 'workflowStep', 'reminders', 'createdAt', 'updatedAt', 'organization', 'opportunity_c1908b8f', 'lead_e5b9c444', 'customer_14831de6', 'contact_cdc90e7a', 'b2b_customer_22d81e5c', 'account_89f0f6f');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Task $proxy) {
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
    public function setSubject($subject)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', array($subject));

        return parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', array());

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getDueDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDueDate', array());

        return parent::getDueDate();
    }

    /**
     * {@inheritDoc}
     */
    public function isDueDateExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDueDateExpired', array());

        return parent::isDueDateExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setDueDate(\DateTime $dueDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDueDate', array($dueDate));

        return parent::setDueDate($dueDate);
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
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskPriority', array());

        return parent::getTaskPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskPriority($taskPriority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskPriority', array($taskPriority));

        return parent::setTaskPriority($taskPriority);
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
    public function getOwnerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerId', array());

        return parent::getOwnerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowStepName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowStepName', array());

        return parent::getWorkflowStepName();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowItem($workflowItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowItem', array($workflowItem));

        return parent::setWorkflowItem($workflowItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowItem', array());

        return parent::getWorkflowItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowStep($workflowStep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowStep', array($workflowStep));

        return parent::setWorkflowStep($workflowStep);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowStep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowStep', array());

        return parent::getWorkflowStep();
    }

    /**
     * {@inheritDoc}
     */
    public function getReminders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReminders', array());

        return parent::getReminders();
    }

    /**
     * {@inheritDoc}
     */
    public function setReminders(\Doctrine\Common\Collections\Collection $reminders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReminders', array($reminders));

        return parent::setReminders($reminders);
    }

    /**
     * {@inheritDoc}
     */
    public function getReminderData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReminderData', array());

        return parent::getReminderData();
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
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function supportActivityTarget($targetClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportActivityTarget', array($targetClass));

        return parent::supportActivityTarget($targetClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunityC1908b8f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunityC1908b8f', array($value));

        return parent::setOpportunityC1908b8f($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setLeadE5b9c444($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeadE5b9c444', array($value));

        return parent::setLeadE5b9c444($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer14831de6($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer14831de6', array($value));

        return parent::setCustomer14831de6($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setContactCdc90e7a($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactCdc90e7a', array($value));

        return parent::setContactCdc90e7a($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setB2bCustomer22d81e5c($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setB2bCustomer22d81e5c', array($value));

        return parent::setB2bCustomer22d81e5c($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount89f0f6f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount89f0f6f', array($value));

        return parent::setAccount89f0f6f($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOpportunityC1908b8f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOpportunityC1908b8f', array($value));

        return parent::removeOpportunityC1908b8f($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLeadE5b9c444($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLeadE5b9c444', array($value));

        return parent::removeLeadE5b9c444($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomer14831de6($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomer14831de6', array($value));

        return parent::removeCustomer14831de6($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContactCdc90e7a($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContactCdc90e7a', array($value));

        return parent::removeContactCdc90e7a($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeB2bCustomer22d81e5c($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeB2bCustomer22d81e5c', array($value));

        return parent::removeB2bCustomer22d81e5c($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivityTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivityTarget', array($target));

        return parent::removeActivityTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAccount89f0f6f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAccount89f0f6f', array($value));

        return parent::removeAccount89f0f6f($value);
    }

    /**
     * {@inheritDoc}
     */
    public function hasActivityTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasActivityTarget', array($target));

        return parent::hasActivityTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunityC1908b8f()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunityC1908b8f', array());

        return parent::getOpportunityC1908b8f();
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadE5b9c444()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeadE5b9c444', array());

        return parent::getLeadE5b9c444();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer14831de6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer14831de6', array());

        return parent::getCustomer14831de6();
    }

    /**
     * {@inheritDoc}
     */
    public function getContactCdc90e7a()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactCdc90e7a', array());

        return parent::getContactCdc90e7a();
    }

    /**
     * {@inheritDoc}
     */
    public function getB2bCustomer22d81e5c()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getB2bCustomer22d81e5c', array());

        return parent::getB2bCustomer22d81e5c();
    }

    /**
     * {@inheritDoc}
     */
    public function getActivityTargets($targetClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityTargets', array($targetClass));

        return parent::getActivityTargets($targetClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivityTargetEntities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityTargetEntities', array());

        return parent::getActivityTargetEntities();
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount89f0f6f()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount89f0f6f', array());

        return parent::getAccount89f0f6f();
    }

    /**
     * {@inheritDoc}
     */
    public function addOpportunityC1908b8f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOpportunityC1908b8f', array($value));

        return parent::addOpportunityC1908b8f($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addLeadE5b9c444($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLeadE5b9c444', array($value));

        return parent::addLeadE5b9c444($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomer14831de6($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomer14831de6', array($value));

        return parent::addCustomer14831de6($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addContactCdc90e7a($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContactCdc90e7a', array($value));

        return parent::addContactCdc90e7a($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addB2bCustomer22d81e5c($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addB2bCustomer22d81e5c', array($value));

        return parent::addB2bCustomer22d81e5c($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addActivityTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivityTarget', array($target));

        return parent::addActivityTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function addAccount89f0f6f($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAccount89f0f6f', array($value));

        return parent::addAccount89f0f6f($value);
    }

}
