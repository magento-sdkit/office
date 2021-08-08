<?php
namespace Sdkit\Office\Controller\Sample;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Sdkit\Office\Model\EmployeeFactory;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends Action
{

    protected $employeeFactory;
    public function __construct(Context $context,
        EmployeeFactory $employeeFactory
    )
    {
        $this->employeeFactory = $employeeFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
//        $collection = $this->employeeFactory->create()->getCollection();

        /*  @var $collection \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection */
        $collection = $this->_objectManager->create('Sdkit\Office\Model\ResourceModel\EmployeeCollection');
        $collection->addFieldToSelect(array('salary', 'dob', 'salary'));

        foreach($collection as $employee) {
            $arrray_employee[] = $employee->toArray();
        }

//      $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
//      $result->setData($arrray_employee);

        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        return $result;
    }
}
