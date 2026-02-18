<?php

namespace TwoJays\NeonApiWrapper\Services\Households\Requests;

use TwoJays\NeonApiWrapper\Concerns\HouseholdsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListRelationTypesRequest implements GetRequest, WithQueryParams
{
    use HouseholdsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?string $relationTypeCategory = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/listRelationTypes';
    }
}
