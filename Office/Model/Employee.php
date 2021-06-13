<?php
namespace Sdkit\Office\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    const ENTITY = 'sdkit_office_employee';

    protected function _contruct()
    {
        $this->_init(\Sdkit\Office\Model\ResourceModel\Employee::class );
    }
}
