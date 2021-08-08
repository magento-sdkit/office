<?php
namespace Sdkit\Office\Model\ResourceModel;

use Magento\Eav\Model\Entity\Collection\AbstractCollection;

class EmployeeCollection extends AbstractCollection
{
    protected function _construct()
    {
       $this->_init(\Sdkit\Office\Model\Employee::class, \Sdkit\Office\Model\ResourceModel\Employee::class);
    }

}
