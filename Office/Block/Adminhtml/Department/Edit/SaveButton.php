<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sdkit\Office\Block\Adminhtml\Department\Edit;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 * @package Magento\Customer\Block\Adminhtml\Edit
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
    ) {
        parent::__construct($context, $registry);

    }

    /**
     * @return array
     */
    public function getButtonData()
    {
//        $customerId = $this->getCustomerId();
//        $canModify = !$customerId || !$this->customerAccountManagement->isReadonly($this->getCustomerId());
        $data = [];
//        if ($canModify) {
            $data = [
                'label' => __('Save Department'),
                'class' => 'save primary',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'save']],
                    'form-role' => 'save',
                ],
                'sort_order' => 90,
            ];
//        }
        return $data;
    }
}
