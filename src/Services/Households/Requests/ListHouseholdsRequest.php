<?php

namespace TwoJays\NeonApiWrapper\Services\Households\Requests;

use TwoJays\NeonApiWrapper\Concerns\HouseholdsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListHouseholdsRequest implements GetRequest, WithQueryParams
{
    use HouseholdsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?string $householdId = null,
        public ?string $accountId = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/listHouseholds';
    }
}
