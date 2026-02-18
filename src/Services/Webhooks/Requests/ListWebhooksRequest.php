<?php

namespace TwoJays\NeonApiWrapper\Services\Webhooks\Requests;

use TwoJays\NeonApiWrapper\Concerns\WebhooksEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;

class ListWebhooksRequest implements GetRequest
{
    use WebhooksEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }
}
