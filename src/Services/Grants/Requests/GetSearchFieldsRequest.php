<?php

namespace TwoJays\NeonApiWrapper\Services\Grants\Requests;

use TwoJays\NeonApiWrapper\Concerns\GrantsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetSearchFieldsRequest implements GetRequest, WithQueryParams
{
    use GrantsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?string $searchKey = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/search/searchFields';
    }
}
