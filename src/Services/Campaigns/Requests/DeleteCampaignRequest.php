<?php

namespace TwoJays\NeonApiWrapper\Services\Campaigns\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\CampaignsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteCampaignRequest implements DeleteRequest, WithPathParams
{
    use CampaignsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public string $id,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}';
    }
}
