<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Customer\Controller\Adminhtml\Index;

class Carts extends \Magento\Customer\Controller\Adminhtml\Index
{
    /**
     * Get shopping carts from all websites for specified client
     *
     * @return \Magento\Framework\View\Result\Layout
     */
    public function execute()
    {
        $this->_initCustomer();
        $resultLayout = $this->resultLayoutFactory->create();
        return $resultLayout;
    }
}
