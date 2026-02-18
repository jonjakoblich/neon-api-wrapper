<?php

namespace TwoJays\NeonApiWrapper\Services\Campaigns\Requests;

use TwoJays\NeonApiWrapper\Concerns\CampaignsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;

class ListCampaignsRequest implements GetRequest
{
    use CampaignsEndpoint, ExecutesRequests;

    public function __construct()
    {
        $this->setEndpoint();
    }
}
