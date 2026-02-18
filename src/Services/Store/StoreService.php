<?php

namespace TwoJays\NeonApiWrapper\Services\Store;

use TwoJays\NeonApiWrapper\DataObjects;
use TwoJays\NeonApiWrapper\Services\BaseService;

class StoreService extends BaseService
{
    /**
     * This returns an array in order to match the API specification.
     */
    public function getCatalogs(): array
    {
        return $this->getResponse(
            new Requests\GetCatalogsRequest(),
            DataObjects\CatalogListData::class
        )->toArray();
    }

    /**
     * This returns an array in order to match the API specification.
     */
    public function getCategories(): array
    {
        return $this->getResponse(
            new Requests\GetCategoriesRequest(),
            DataObjects\StoreCategoryListData::class
        )->toArray();
    }

    public function getProducts(
        ?string $catalogId = null,
        ?string $categoryId = null,
        ?string $code = null,
        ?int $currentPage = null,
        ?string $keyword = null,
        ?string $name = null,
        ?int $pageSize = null,
        ?string $status = null,
    ): DataObjects\ProductSearchResponseData
    {
        return $this->getResponse(
            new Requests\GetProductsRequest(...func_get_args()),
            DataObjects\ProductSearchResponseData::class
        );
    }

    public function getProduct(
        int $productId
    ): DataObjects\ProductData
    {
        return $this->getResponse(
            new Requests\GetProductRequest($productId),
            DataObjects\ProductData::class
        );
    }
}
