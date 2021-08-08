<?php
namespace Sdkit\Office\Controller\Adminhtml\Department;


use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\RedirectFactory;
use Magento\Framework\Controller\ResultFactory;

class NewAction extends Action
{
    public function __construct(Action\Context $context,
                                ResultFactory $resultFactory
                                ,\Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    )
    {
        parent::__construct($context);
        $this->resultFactory = $resultFactory;
        $this->resultForwardFactory = $resultForwardFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
//        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $result = $this->resultForwardFactory->create();
        $result->forward("edit");
        return $result;
    }
}
