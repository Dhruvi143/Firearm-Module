<?php
namespace Dhruvi\Firearm\Model\ResourceModel\Firearm;

use Dhruvi\Firearm\Model\Firearm;
use Dhruvi\Firearm\Model\ResourceModel\Firearm as ResourceModelFirearm;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * class Collection Extends Abstract Collection from Magento Framwork
 *           => then create init method
 *
 *
 */
class Collection extends AbstractCollection
{
    /**
     * In Collection init method takes model(className) and ResourceModel(className) as params
     */
    protected function _construct()
    {
        $this->_init(Firearm::class, ResourceModelFirearm::class);
    }
}
