<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;

class GetAccountOrdersRequest implements GetRequest, WithPathParams, WithQueryParams
{
    use AccountsEndpoint, ExecutesRequests, HasPathParams, HasQueryParams;

    public function __construct(
        #[PathParam]
        public readonly string $id, 
        public readonly ?int $currentPage = 0, 
        public readonly ?int $pageSize = 20, 
        public readonly ?string $sortColumn = 'date', 
        public readonly ?string $sortDirection = PaginationSortDirectionEnum::DESC->value,
        public readonly ?array $transactionTypes = [],
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/orders';
    }
}