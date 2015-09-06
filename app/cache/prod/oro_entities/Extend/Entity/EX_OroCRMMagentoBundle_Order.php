<?php

namespace Extend\Entity;

abstract class EX_OroCRMMagentoBundle_Order extends \Oro\Bundle\BusinessEntitiesBundle\Entity\BaseOrder implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct()
    {
        parent::__construct();
    }
}