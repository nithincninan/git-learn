<?php
namespace Lotus\Landingcategories\Model\ResourceModel\Landingcategory;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Lotus\Landingcategories\Model\Landingcategory::class,
            \Lotus\Landingcategories\Model\ResourceModel\Landingcategory::class
        );
    }
}
