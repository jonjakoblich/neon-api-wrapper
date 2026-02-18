<?php

namespace TwoJays\NeonApiWrapper\Services\Payments\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\PaymentsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\AddPaymentRequestData;

class AddPaymentRequest implements PostRequest, WithRequestBodyParam
{
    use PaymentsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public AddPaymentRequestData $payment,
    ){
        $this->setEndpoint();
    }
}
