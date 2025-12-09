<?php
namespace Lotus\Landingcategories\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Landingcategory extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('lotus_landingcategories', 'entity_id');
    }
}
