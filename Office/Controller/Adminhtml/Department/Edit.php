<?php
namespace Sdkit\Office\Controller\Adminhtml\Department;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Edit extends Action implements HttpGetActionInterface
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
//        $id = $this->getRequest()->getParam("id");
//        $model = $this->_objectManager->create('Sdkit\Office\Model\Department');
//
//        if($id) {
//            $department = $model->load($id);
//        }
        // TODO: Implement execute() method.
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }

}
