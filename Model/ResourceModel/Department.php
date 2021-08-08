<?php
namespace Sdkit\Office\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Department extends AbstractDb
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('skdit_office_department_v1', 'entity_id');
    }


}
