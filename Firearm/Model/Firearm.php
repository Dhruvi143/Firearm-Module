<?php
namespace Dhruvi\Firearm\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * class Firearm Extends Abstract Model from Magento Framwork
 *     => then create init method which takes resource model class Names as param
 *
 */
class Firearm extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Dhruvi\Firearm\Model\ResourceModel\Firearm::class);
    }
}
