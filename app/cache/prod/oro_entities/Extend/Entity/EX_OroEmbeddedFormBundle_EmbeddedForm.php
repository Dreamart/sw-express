<?php

namespace Extend\Entity;

abstract class EX_OroEmbeddedFormBundle_EmbeddedForm implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $dataChannel;

    public function setDataChannel($value)
    {
        $this->dataChannel = $value; return $this;
    }

    public function getDataChannel()
    {
        return $this->dataChannel;
    }

    public function __construct()
    {
    }
}