<?php

namespace TwoJays\NeonApiWrapper\Services\Payments\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\PaymentsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class RefundPaymentRequest implements PostRequest, WithPathParams
{
    use PaymentsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/refund';
    }
}
