<?php
namespace Sdkit\Office\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Sdkit\Office\Model\Employee;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        $setup->startSetup();


        $employeeEntityTable = \Sdkit\Office\Model\Employee::ENTITY . '_entity';
//        $departmentEntityTable = 'sdkit_office_department_v1';
//        $departmentEntityTable1 = 'sdkit_office_deparment_v1';
//        $setup->getConnection()->dropForeignKey(
//            $setup->getTable($employeeEntityTable),
//            $setup->getFkName($employeeEntityTable, 'department_id', $departmentEntityTable, 'entity_id')
//        );

//        $setup->getConnection()
//            ->addForeignKey(
//                $setup->getFkName($employeeEntityTable, 'department_id', $departmentEntityTable, 'entity_id'),
//                $setup->getTable($employeeEntityTable),
//                'department_id',
//                $setup->getTable($departmentEntityTable1),
//                'entity_id',
//                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
//            );


        $setup->endSetup();
    }
}
