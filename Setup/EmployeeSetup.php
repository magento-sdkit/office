<?php
namespace Sdkit\Office\Setup;

use Magento\Eav\Setup\EavSetup;
use Sdkit\Office\Model\Employee;

class EmployeeSetup extends EavSetup
{
    public function getDefaultEntities()
    {
        $employeeEntity = Employee::ENTITY;
        $entities = [
            $employeeEntity => [
                'entity_model' => 'Sdkit\Office\Model\ResourceModel\Employee',
                'table' => $employeeEntity . '_entity',
                'attributes' => [
                    'department_id' => [
                        'type' => 'static',
                    ],
                    'email' => [
                        'type' => 'static',
                    ],

                    'first_name' => [
                        'type' => 'static',
                    ],
                    'last_name' => [
                        'type' => 'static',
                    ],
                ],
            ],
        ];
        return $entities;
    }
}
