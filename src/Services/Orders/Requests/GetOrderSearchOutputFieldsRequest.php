<?php

namespace TwoJays\NeonApiWrapper\Services\Orders\Requests;

use TwoJays\NeonApiWrapper\Concerns\OrdersEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetOrderSearchOutputFieldsRequest implements GetRequest, WithQueryParams
{
    use OrdersEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?string $searchKey = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/search/outputFields';
    }
}
