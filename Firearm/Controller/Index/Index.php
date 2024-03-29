<?php

namespace Dhruvi\Firearm\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        /**
         * Returning Page generated by ResultFactory of type page
         */
        $this->_view->getPage()->getConfig()->getTitle()->set(__("Firearms are"));
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
