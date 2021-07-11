<?php
namespace Sdkit\Office\Controller\Adminhtml\Department;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;

class MassDelete extends Action implements HttpPostActionInterface
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

        $postValues = $this->getRequest()->getPostValue();
        $model = $this->_objectManager->create('Sdkit\Office\Model\Department');


        try {
            if (!empty($postValues['selected'])) {
                foreach ($postValues['selected'] as $key => $value) {
                    $model->load($value)->delete();
                }
            }
            $this->messageManager->addErrorMessage("Error Message");
            $this->messageManager->addSuccessMessage("Success Message");

        } catch (\Exception $e) {

        }

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/*/');
        return $resultRedirect;
    }

}
