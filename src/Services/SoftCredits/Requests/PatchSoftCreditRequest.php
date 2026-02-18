<?php

namespace TwoJays\NeonApiWrapper\Services\SoftCredits\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\SoftCreditsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PatchRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\SoftCreditData;

class PatchSoftCreditRequest implements PatchRequest, WithPathParams, WithRequestBodyParam
{
    use SoftCreditsEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public string $id,
        #[RequestBodyParam]
        public SoftCreditData $softCredit
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}';
    }
}
