<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SalesRule\Controller\Adminhtml\Promo\Quote;

/**
 * Class \Magento\SalesRule\Controller\Adminhtml\Promo\Quote\Index
 *
 */
class Index extends \Magento\SalesRule\Controller\Adminhtml\Promo\Quote
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_initAction()->_addBreadcrumb(__('Catalog'), __('Catalog'));
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Cart Price Rules'));
        $this->_view->renderLayout();
    }
}
