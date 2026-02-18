<?php

namespace TwoJays\NeonApiWrapper\Services\SoftCredits\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\SoftCreditsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class GetSoftCreditRequest implements GetRequest, WithPathParams
{
    use SoftCreditsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}';
    }
}
