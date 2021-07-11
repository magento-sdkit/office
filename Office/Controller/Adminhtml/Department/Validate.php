<?php
namespace Sdkit\Office\Controller\Adminhtml\Department;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Validate extends Action
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
        $response = new \Magento\Framework\DataObject();
        $response->setError(0);
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

//        $response->setError(1);
//        $response->setMessage(array("This do not validate"));

//        if ($response->getError()) {
//            $response->setError(true);
//            $response->setMessages($response->getMessages());
//        }
        $resultJson->setData($response);
        return $resultJson;
    }
}
