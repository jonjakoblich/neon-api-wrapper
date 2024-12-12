<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\MembershipsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\PaymentData;

class AddMembershipPaymentRequest implements PostRequest, WithPathParams, WithRequestBodyParam
{
    use MembershipsEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public string $membershipId,
        #[RequestBodyParam]
        public PaymentData $payment,
    ){
        $this->setEndpoint();   
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{membershipId}/payments';
    }
}