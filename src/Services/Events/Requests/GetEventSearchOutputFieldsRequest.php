<?php

namespace TwoJays\NeonApiWrapper\Services\Events\Requests;

use TwoJays\NeonApiWrapper\Concerns\EventsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetEventSearchOutputFieldsRequest implements GetRequest, WithQueryParams
{
    use EventsEndpoint, ExecutesRequests, HasQueryParams;

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
