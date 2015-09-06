<?php

namespace Extend\Entity;

abstract class EX_OroUserBundle_Role extends \Oro\Bundle\UserBundle\Entity\AbstractRole implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($role)
    {
        parent::__construct($role);
    }
}