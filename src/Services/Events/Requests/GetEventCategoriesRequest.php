<?php

namespace TwoJays\NeonApiWrapper\Services\Events\Requests;

use TwoJays\NeonApiWrapper\Concerns\EventsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;

class GetEventCategoriesRequest implements GetRequest
{
    use EventsEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/categories';
    }
}
