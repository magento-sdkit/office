<?php

namespace Sdkit\Office\Model;


use Magento\Framework\Model\AbstractModel;

class Department extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Sdkit\Office\Model\ResourceModel\Department');
    }

}
