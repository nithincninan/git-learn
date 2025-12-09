<?php

namespace Lotus\Landingcategories\Model;

use Magento\Framework\Model\AbstractModel;

class Landingcategory extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Lotus\Landingcategories\Model\ResourceModel\Landingcategory::class);
    }
}
