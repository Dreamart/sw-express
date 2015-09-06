<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingWebsite implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $channel;

    public function setChannel($value)
    {
        $this->channel = $value; return $this;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function __construct()
    {
    }
}