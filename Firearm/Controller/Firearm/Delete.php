<?php
namespace Dhruvi\Firearm\Controller\Firearm;

use Dhruvi\Firearm\Model\FirearmFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Message\ManagerInterface;

/**
 * class Delete
 *
 * for controller firearm\firearm\Delete
 *
 * Delete operation controller
 */
class Delete extends Action
{
    /**
     * @var FirearmFactory
     */
    protected $_firearmFactory;
    /**
     * @var ManagerInterface
     */
    protected $messageManager;
    /**
     * Delete Constructor
     * @param Context $context
     * @param ManagerInterface $messageManager
     * @param FirearmFactory $firearmFactory
     */
    public function __construct(
        Context $context,
        ManagerInterface $messageManager,
        FirearmFactory $firearmFactory
    ) {
        $this->_firearmFactory= $firearmFactory;
        $this->messageManager= $messageManager;
        parent::__construct($context);
    }
    public function execute()
    {
        /**
         * fetch id from the request ($_POST)
         */
        $id= $this->getRequest()->getParam('id');
        try {
            $model = $this->_firearmFactory->create();
            $model->load($id);
            //var_dump($model);die;
            $model->delete();
            /**
             * Message manager is useful to add success and failure mesaages
             */
            $this->messageManager->addSuccessMessage(__("Successfully deleted"));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
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
