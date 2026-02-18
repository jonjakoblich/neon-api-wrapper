<?php

namespace TwoJays\NeonApiWrapper\Services\Store\Requests;

use TwoJays\NeonApiWrapper\Concerns\StoreEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;

class GetCatalogsRequest implements GetRequest
{
    use StoreEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/catalogs';
    }
}
