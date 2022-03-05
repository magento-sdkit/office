<?php
namespace Sdkit\Office\Plugin;

class CatalogView
{
    public function aroundExecute(\Magento\Catalog\Controller\Category\View $subject, \Closure $proceed)
    {
//        // your custom code before the original execute function
//        $this->doSomethingBeforeExecute();

        // call the original execute function
        $returnValue = $proceed();

        // your custom code after the original execute function
        if ($returnValue) {
            $params = $subject->getRequest()->getParams();
            if(isset($params['p'])){
                $returnValue->getConfig()->setRobots('NOINDEX,FOLLOW');
            }
//            $this->doSomethingAfterExecute();
        }

        return $returnValue;
    }
}
