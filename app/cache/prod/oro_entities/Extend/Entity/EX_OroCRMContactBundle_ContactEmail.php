<?php

namespace Extend\Entity;

abstract class EX_OroCRMContactBundle_ContactEmail extends \Oro\Bundle\AddressBundle\Entity\AbstractEmail implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($email = NULL)
    {
        parent::__construct($email);
    }
}