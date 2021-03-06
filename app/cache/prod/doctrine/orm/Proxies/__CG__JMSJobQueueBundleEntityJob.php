<?php

namespace Proxies\__CG__\JMS\JobQueueBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Job extends \JMS\JobQueueBundle\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'state', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'queue', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'priority', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'createdAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'startedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'checkedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'executeAfter', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'closedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'command', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'args', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'dependencies', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'output', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'errorOutput', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'exitCode', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'maxRuntime', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'maxRetries', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'originalJob', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'retryJobs', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'stackTrace', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'runtime', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'memoryUsage', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'memoryUsageReal', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'relatedEntities');
        }

        return array('__isInitialized__', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'state', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'queue', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'priority', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'createdAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'startedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'checkedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'executeAfter', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'closedAt', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'command', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'args', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'dependencies', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'output', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'errorOutput', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'exitCode', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'maxRuntime', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'maxRetries', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'originalJob', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'retryJobs', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'stackTrace', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'runtime', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'memoryUsage', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'memoryUsageReal', '' . "\0" . 'JMS\\JobQueueBundle\\Entity\\Job' . "\0" . 'relatedEntities');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Job $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
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
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', array());

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function isStartable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStartable', array());

        return parent::isStartable();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($newState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($newState));

        return parent::setState($newState);
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
    public function getClosedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClosedAt', array());

        return parent::getClosedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getExecuteAfter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExecuteAfter', array());

        return parent::getExecuteAfter();
    }

    /**
     * {@inheritDoc}
     */
    public function setExecuteAfter(\DateTime $executeAfter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExecuteAfter', array($executeAfter));

        return parent::setExecuteAfter($executeAfter);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommand', array());

        return parent::getCommand();
    }

    /**
     * {@inheritDoc}
     */
    public function getArgs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArgs', array());

        return parent::getArgs();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedEntities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedEntities', array());

        return parent::getRelatedEntities();
    }

    /**
     * {@inheritDoc}
     */
    public function isClosedNonSuccessful()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isClosedNonSuccessful', array());

        return parent::isClosedNonSuccessful();
    }

    /**
     * {@inheritDoc}
     */
    public function findRelatedEntity($class)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'findRelatedEntity', array($class));

        return parent::findRelatedEntity($class);
    }

    /**
     * {@inheritDoc}
     */
    public function addRelatedEntity($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelatedEntity', array($entity));

        return parent::addRelatedEntity($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDependencies', array());

        return parent::getDependencies();
    }

    /**
     * {@inheritDoc}
     */
    public function hasDependency(\JMS\JobQueueBundle\Entity\Job $job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasDependency', array($job));

        return parent::hasDependency($job);
    }

    /**
     * {@inheritDoc}
     */
    public function addDependency(\JMS\JobQueueBundle\Entity\Job $job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDependency', array($job));

        return parent::addDependency($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuntime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuntime', array());

        return parent::getRuntime();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuntime($time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuntime', array($time));

        return parent::setRuntime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemoryUsage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemoryUsage', array());

        return parent::getMemoryUsage();
    }

    /**
     * {@inheritDoc}
     */
    public function getMemoryUsageReal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemoryUsageReal', array());

        return parent::getMemoryUsageReal();
    }

    /**
     * {@inheritDoc}
     */
    public function addOutput($output)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOutput', array($output));

        return parent::addOutput($output);
    }

    /**
     * {@inheritDoc}
     */
    public function addErrorOutput($output)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addErrorOutput', array($output));

        return parent::addErrorOutput($output);
    }

    /**
     * {@inheritDoc}
     */
    public function setOutput($output)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutput', array($output));

        return parent::setOutput($output);
    }

    /**
     * {@inheritDoc}
     */
    public function setErrorOutput($output)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErrorOutput', array($output));

        return parent::setErrorOutput($output);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutput', array());

        return parent::getOutput();
    }

    /**
     * {@inheritDoc}
     */
    public function getErrorOutput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErrorOutput', array());

        return parent::getErrorOutput();
    }

    /**
     * {@inheritDoc}
     */
    public function setExitCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExitCode', array($code));

        return parent::setExitCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getExitCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExitCode', array());

        return parent::getExitCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxRuntime($time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxRuntime', array($time));

        return parent::setMaxRuntime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxRuntime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxRuntime', array());

        return parent::getMaxRuntime();
    }

    /**
     * {@inheritDoc}
     */
    public function getStartedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartedAt', array());

        return parent::getStartedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxRetries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxRetries', array());

        return parent::getMaxRetries();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxRetries($tries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxRetries', array($tries));

        return parent::setMaxRetries($tries);
    }

    /**
     * {@inheritDoc}
     */
    public function isRetryAllowed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRetryAllowed', array());

        return parent::isRetryAllowed();
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalJob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalJob', array());

        return parent::getOriginalJob();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalJob(\JMS\JobQueueBundle\Entity\Job $job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalJob', array($job));

        return parent::setOriginalJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function addRetryJob(\JMS\JobQueueBundle\Entity\Job $job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRetryJob', array($job));

        return parent::addRetryJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetryJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetryJobs', array());

        return parent::getRetryJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function isRetryJob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRetryJob', array());

        return parent::isRetryJob();
    }

    /**
     * {@inheritDoc}
     */
    public function checked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checked', array());

        return parent::checked();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedAt', array());

        return parent::getCheckedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setStackTrace(\Symfony\Component\HttpKernel\Exception\FlattenException $ex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStackTrace', array($ex));

        return parent::setStackTrace($ex);
    }

    /**
     * {@inheritDoc}
     */
    public function getStackTrace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStackTrace', array());

        return parent::getStackTrace();
    }

    /**
     * {@inheritDoc}
     */
    public function getQueue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQueue', array());

        return parent::getQueue();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', array());

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function isPending()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPending', array());

        return parent::isPending();
    }

    /**
     * {@inheritDoc}
     */
    public function isCanceled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCanceled', array());

        return parent::isCanceled();
    }

    /**
     * {@inheritDoc}
     */
    public function isRunning()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRunning', array());

        return parent::isRunning();
    }

    /**
     * {@inheritDoc}
     */
    public function isTerminated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTerminated', array());

        return parent::isTerminated();
    }

    /**
     * {@inheritDoc}
     */
    public function isFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFailed', array());

        return parent::isFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function isFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFinished', array());

        return parent::isFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function isIncomplete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIncomplete', array());

        return parent::isIncomplete();
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
