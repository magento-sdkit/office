<?php

namespace Sdkit\Office\Model\Employee;

/**
 * Office attribute model
 *
 * @method int getSortOrder()
 */
class Attribute extends \Magento\Eav\Model\Entity\Attribute
{
    /**
     * Init resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sdkit\Office\Model\ResourceModel\Employee\Attribute');
    }
}
