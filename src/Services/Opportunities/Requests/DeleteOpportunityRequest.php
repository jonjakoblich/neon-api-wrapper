<?php

namespace TwoJays\NeonApiWrapper\Services\Opportunities\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\OpportunitiesEndpoint;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteOpportunityRequest implements DeleteRequest, WithPathParams
{
    use OpportunitiesEndpoint, ExecutesRequests, HasPathParams;

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
