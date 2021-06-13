<?php
namespace Sdkit\Office\Controller\Sample;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Sdkit\Office\Model\Employee;


class Index extends Action implements HttpGetActionInterface
{

    protected $pageResult;

    public function __construct(Context $context, EmployeeFactory $employeeFactory)
    {
        parent::__construct($context);

    }

    public function execute( )
    {
        // TODO: Implement execute() method.
//        print_r($this->_url->getCurrentUrl());

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
