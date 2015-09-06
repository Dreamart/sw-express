<?php

namespace Extend\Entity;

abstract class EX_OroCRMMagentoBundle_NewsletterSubscriber implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $status;

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function __construct()
    {
    }
}