<?php

namespace Proxies\__CG__\OroCRM\Bundle\ContactUsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ContactRequest extends \OroCRM\Bundle\ContactUsBundle\Entity\ContactRequest implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'organizationName', 'preferredContactMethod', 'contactReason', 'feedback', 'opportunity', 'lead', 'calls', 'emails', 'workflowItem', 'workflowStep', 'owner', 'id', 'firstName', 'lastName', 'emailAddress', 'phone', 'comment', 'createdAt', 'updatedAt', 'dataChannel');
        }

        return array('__isInitialized__', 'organizationName', 'preferredContactMethod', 'contactReason', 'feedback', 'opportunity', 'lead', 'calls', 'emails', 'workflowItem', 'workflowStep', 'owner', 'id', 'firstName', 'lastName', 'emailAddress', 'phone', 'comment', 'createdAt', 'updatedAt', 'dataChannel');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ContactRequest $proxy) {
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
    public function setOrganizationName($organizationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizationName', array($organizationName));

        return parent::setOrganizationName($organizationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizationName', array());

        return parent::getOrganizationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreferredContactMethod($preferredContactMethod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreferredContactMethod', array($preferredContactMethod));

        return parent::setPreferredContactMethod($preferredContactMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreferredContactMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreferredContactMethod', array());

        return parent::getPreferredContactMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactReason(\OroCRM\Bundle\ContactUsBundle\Entity\ContactReason $contactReason = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactReason', array($contactReason));

        return parent::setContactReason($contactReason);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactReason', array());

        return parent::getContactReason();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeedback($feedback)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeedback', array($feedback));

        return parent::setFeedback($feedback);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedback()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedback', array());

        return parent::getFeedback();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\OroCRM\Bundle\SalesBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', array($lead));

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', array());

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunity(\OroCRM\Bundle\SalesBundle\Entity\Opportunity $opportunity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunity', array($opportunity));

        return parent::setOpportunity($opportunity);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunity', array());

        return parent::getOpportunity();
    }

    /**
     * {@inheritDoc}
     */
    public function getCalls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalls', array());

        return parent::getCalls();
    }

    /**
     * {@inheritDoc}
     */
    public function addCall(\OroCRM\Bundle\CallBundle\Entity\Call $call)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCall', array($call));

        return parent::addCall($call);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCall(\OroCRM\Bundle\CallBundle\Entity\Call $call)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCall', array($call));

        return parent::removeCall($call);
    }

    /**
     * {@inheritDoc}
     */
    public function hasCall(\OroCRM\Bundle\CallBundle\Entity\Call $call)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasCall', array($call));

        return parent::hasCall($call);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmails', array());

        return parent::getEmails();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmail(\Oro\Bundle\EmailBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmail', array($email));

        return parent::addEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmail(\Oro\Bundle\EmailBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmail', array($email));

        return parent::removeEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function hasEmail(\Oro\Bundle\EmailBundle\Entity\Email $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasEmail', array($email));

        return parent::hasEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowItem(\Oro\Bundle\WorkflowBundle\Entity\WorkflowItem $workflowItem)
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
    public function setWorkflowStep(\Oro\Bundle\WorkflowBundle\Entity\WorkflowStep $workflowStep)
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
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', array());

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($organization));

        return parent::setOwner($organization);
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
    public function setEmailAddress($emailAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailAddress', array($emailAddress));

        return parent::setEmailAddress($emailAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailAddress', array());

        return parent::getEmailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment($comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', array($comment));

        return parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', array());

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
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
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
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
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
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
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', array());

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumbers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumbers', array());

        return parent::getPhoneNumbers();
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

}
