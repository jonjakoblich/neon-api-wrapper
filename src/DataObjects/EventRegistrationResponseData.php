<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventRegistrationResponseData extends Data
{
    public function __construct(
        public ?int $id = null,
        public ?string $accountId = null,
        public ?string $status = null,
        public ?PaymentResponseData $paymentResponse = null
    ) {}
}
