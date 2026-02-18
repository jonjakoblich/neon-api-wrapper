<?php

namespace TwoJays\NeonApiWrapper\Services\Store\Requests;

use TwoJays\NeonApiWrapper\Concerns\StoreEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetProductsRequest implements GetRequest, WithQueryParams
{
    use StoreEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?string $catalogId = null,
        public ?string $categoryId = null,
        public ?string $code = null,
        public ?int $currentPage = null,
        public ?string $keyword = null,
        public ?string $name = null,
        public ?int $pageSize = null,
        public ?string $status = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/products';
    }
}
