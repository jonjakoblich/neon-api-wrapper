<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\MembershipsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class GetMembershipAutoRenewalRequest implements GetRequest, WithPathParams
{
    use MembershipsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public string $membershipId
    ){
        $this->setEndpoint();  
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{membershipId}/autoRenewal';
    }
}