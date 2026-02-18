<?php

namespace TwoJays\NeonApiWrapper\Services\Windfall\Requests;

use TwoJays\NeonApiWrapper\Concerns\WindfallEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;

class DeleteAllWindfallRequest implements DeleteRequest
{
    use WindfallEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/windfall';
    }
}
