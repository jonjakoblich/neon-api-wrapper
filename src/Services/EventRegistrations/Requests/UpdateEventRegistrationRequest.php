<?php

namespace TwoJays\NeonApiWrapper\Services\EventRegistrations\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\EventRegistrationsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PutRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\EventRegistrationData;

class UpdateEventRegistrationRequest implements PutRequest, WithPathParams, WithRequestBodyParam
{
    use EventRegistrationsEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public string $registrationId,
        #[RequestBodyParam]
        public EventRegistrationData $registration
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{registrationId}';
    }
}
