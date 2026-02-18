<?php

namespace TwoJays\NeonApiWrapper\Services\Activities\Requests;

use TwoJays\NeonApiWrapper\Concerns\ActivitiesEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetSearchOutputFieldsRequest implements GetRequest, WithQueryParams
{
    use ActivitiesEndpoint, ExecutesRequests, HasQueryParams;

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
