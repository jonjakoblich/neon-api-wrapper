<?php

namespace TwoJays\NeonApiWrapper\Services\Payments\Requests;

use TwoJays\NeonApiWrapper\Concerns\PaymentsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetDonorCoveredFeesRequest implements GetRequest, WithQueryParams
{
    use PaymentsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public float $transactionAmount,
        public string $transactionType,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/donorCoveredFees';
    }
}
