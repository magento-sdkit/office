<?php
namespace Sdkit\Office\Ui\DataProvider;


use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;

class DepartmentDataProvider extends DataProvider
{
    public function __construct($name, $primaryFieldName, $requestFieldName, ReportingInterface $reporting,
                                SearchCriteriaBuilder $searchCriteriaBuilder, RequestInterface $request,
                                FilterBuilder $filterBuilder, array $meta = [], array $data = [])
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder,
            $request, $filterBuilder, $meta, $data);
    }


//    public function addFilter(\Magento\Framework\Api\Filter $filter)
//    {
//        $this->getCollection()->addFieldToFilter(
//            $filter->getField(),
//            [$filter->getConditionType() => $filter->getValue()]
//        );
//    }
}
