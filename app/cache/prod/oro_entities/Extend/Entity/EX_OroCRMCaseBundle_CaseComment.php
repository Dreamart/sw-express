<?php

namespace Extend\Entity;

abstract class EX_OroCRMCaseBundle_CaseComment extends \Oro\Bundle\CommentBundle\Entity\BaseComment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $attachment;

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function __construct()
    {
    }
}