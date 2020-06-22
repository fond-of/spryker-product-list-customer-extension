<?php

namespace FondOfSpryker\Zed\ProductListCustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductListCustomerRelationTransfer;

interface ProductListCustomerPostSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after product list customer relation object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductListCustomerRelationTransfer $productListCustomerRelationTransfer
     *
     * @return \Generated\Shared\Transfer\ProductListCustomerRelationTransfer
     */
    public function postSave(
        ProductListCustomerRelationTransfer $productListCustomerRelationTransfer
    ): ProductListCustomerRelationTransfer;
}
