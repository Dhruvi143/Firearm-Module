<?php
namespace Dhruvi\Firearm\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * class Firearm Extends Abstract Db from Magento Framwork
 *        => then create init method
 *
 */
class Firearm extends AbstractDb
{
    /**
     * init method takes two params in resource model i.e., Table name, Primary key
     */
    protected function _construct()
    {
        $this->_init('dhruvi_firearm', 'id');
    }
}
