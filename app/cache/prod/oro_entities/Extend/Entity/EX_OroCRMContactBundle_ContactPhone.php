<?php

namespace Extend\Entity;

abstract class EX_OroCRMContactBundle_ContactPhone extends \Oro\Bundle\AddressBundle\Entity\AbstractPhone implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($phone = NULL)
    {
        parent::__construct($phone);
    }
}