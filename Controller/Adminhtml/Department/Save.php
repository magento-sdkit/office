<?php
namespace Sdkit\Office\Controller\Adminhtml\Department;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Save extends Action implements HttpPostActionInterface
{
    public function __construct(Action\Context $context,
                                ResultFactory $resultFactory
    )
    {
        parent::__construct($context);
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $params = $this->getRequest()->getParams();
        $postValues = $this->getRequest()->getPostValue();
        $model = $this->_objectManager->create('Sdkit\Office\Model\Department');
//      $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getFormData(true);

        if (!empty($postValues)) {
            $model->setData($postValues);
        }
        try {
            $model->save();
            $this->messageManager->addErrorMessage("Error Message");
            $this->messageManager->addSuccessMessage("Success Message");
        } catch (\Exception $e) {

        }

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/*/');
        return $resultRedirect;
    }
}
