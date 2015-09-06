<?php

namespace Extend\Entity;

abstract class EX_OroCRMCaseBundle_CaseMailboxProcessSettings extends \Oro\Bundle\EmailBundle\Entity\MailboxProcessSettings implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct()
    {
        parent::__construct();
    }
}