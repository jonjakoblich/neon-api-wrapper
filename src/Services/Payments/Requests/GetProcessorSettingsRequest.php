<?php

namespace TwoJays\NeonApiWrapper\Services\Payments\Requests;

use TwoJays\NeonApiWrapper\Concerns\PaymentsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;

class GetProcessorSettingsRequest implements GetRequest
{
    use PaymentsEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/processorSettings';
    }
}
