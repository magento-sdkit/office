<?php
namespace Sdkit\Office\Ui\DataProvider;


use Sdkit\Office\Model\ResourceModel\Department\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DepartmentFormDataProvider extends AbstractDataProvider
{
    public function __construct($name, $primaryFieldName, $requestFieldName,
        CollectionFactory $collectionFactory
        ,array $meta = [], array $data = [])
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }




}
