<?php

namespace TwoJays\NeonApiWrapper\Services\Opportunities\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\OpportunitiesEndpoint;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\OpportunityData;

class CreateOpportunityRequest implements PostRequest, WithRequestBodyParam
{
    use OpportunitiesEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public OpportunityData $opportunity,
    ){
        $this->setEndpoint();
    }
}
