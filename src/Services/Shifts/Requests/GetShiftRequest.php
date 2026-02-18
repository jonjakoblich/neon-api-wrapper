<?php

namespace TwoJays\NeonApiWrapper\Services\Shifts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\ShiftsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class GetShiftRequest implements GetRequest, WithPathParams
{
    use ShiftsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public readonly string $opportunityId,
        #[PathParam]
        public readonly string $shiftId,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{opportunityId}/shifts/{shiftId}';
    }
}
