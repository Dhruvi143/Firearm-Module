<?php

namespace dhruvi\Firearm\Controller\Firearm;

use Dhruvi\Firearm\Model\Firearm;
use Dhruvi\Firearm\Model\ResourceModel\Firearm as FirearmResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

/**
 * class Save
 *
 * for controller firearm\firearm\save
 *
 * Save operation controller
 */
class Save extends Action
{
    /**
     * @var Firearm
     */
    private $firearm;
    /**
     * @var FirearmResourceModel
     */

    private $firearmResourceModel;
    /**
     * save constructor..
     * @param Context $context
     * @param Firearm $firearm
     * @param FirearmResourceModel $firearmResourceModel
     */

    public function __construct(
        Context $context,
        Firearm $firearm,
        FirearmResourceModel $firearmResourceModel
    ) {
        $this->firearm = $firearm;
        $this->firearmResourceModel = $firearmResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        /**
         * fetch info from the request ($_POST)
         */
        $params = $this->getRequest()->getParams();
        $firearm = $this->firearm->setData($params);
        try {
            $this->firearmResourceModel->save($firearm);
            /**
             * Message manager is useful to add success and failure mesaages
             */
            $this->messageManager->addSuccessMessage(__("Successfully added the Firearm %1", $params['name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /*
         * @var $redirect \Magento\Framework\Controller\Result\RedirectFactory
         * Instance of Redirect Result
         */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('firearm');
        return $redirect;
    }
}
