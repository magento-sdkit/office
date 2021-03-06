<?php
namespace Sdkit\Office\Model\ResourceModel\Department;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Sdkit\Office\Model\Department',
            'Sdkit\Office\Model\ResourceModel\Department'
        );
    }
}
