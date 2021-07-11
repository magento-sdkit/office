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


    public function getData()
    {
        if (isset($this->_loadedData)) {
            return $this->_loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $department) {
            $this->_loadedData[$department->getId()] = $department->getData();
        }
        return $this->_loadedData;
    }


}
