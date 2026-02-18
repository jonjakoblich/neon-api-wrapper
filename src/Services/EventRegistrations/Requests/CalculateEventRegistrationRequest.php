<?php

namespace TwoJays\NeonApiWrapper\Services\EventRegistrations\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\EventRegistrationsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\EventRegistrationData;

class CalculateEventRegistrationRequest implements PostRequest, WithRequestBodyParam
{
    use EventRegistrationsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public EventRegistrationData $registration
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/calculate';
    }
}
