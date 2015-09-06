<?php

namespace Extend\Entity;

abstract class EX_OroCRMContactBundle_ContactAddress extends \Oro\Bundle\AddressBundle\Entity\AbstractTypedAddress implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct()
    {
        parent::__construct();
    }
}