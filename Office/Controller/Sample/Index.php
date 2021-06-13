<?php
namespace Sdkit\Office\Controller\Sample;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use \Sdkit\Office\Model\EmployeeFactory;
use \Sdkit\Office\Model\DepartmentFactory;

class Index extends Action implements HttpGetActionInterface
{

    protected $employeeFactory;
    protected $departmentFactory;
    public function __construct(Context $context,
                                EmployeeFactory $employeeFactory,
                                DepartmentFactory $departmentFactory
    )
    {

        $this->employeeFactory = $employeeFactory;
        $this->departmentFactory = $departmentFactory;
        parent::__construct($context);
    }

    public function execute( )
    {
        // TODO: Implement execute() method.
//        print_r($this->_url->getCurrentUrl());
    try {


        $department = $this->departmentFactory->create();
        $department->setName('HR - Human Resouse');
        $department->save();

        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($department->getId());
        $employee->setEmail('anna@sales.loc');
        $employee->setFirstName('Anna');
        $employee->setLastName('Doe');
        $employee->setServiceYears(5);
        $employee->setDob('1986-08-16');
        $employee->setSalary(4200.00);
        $employee->setVatNumber('GB223344556');
        $employee->setNote('Just some notes about Anna');
        $employee->save();

    } catch (Exeption $e) {
        echo $e->getMessage();
    }

//        print_r($employee->toString());
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
