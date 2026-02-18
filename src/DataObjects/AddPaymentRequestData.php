<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AddPaymentRequestData extends Data
{
    public function __construct(
        public ?string $transactionId = null,
        public ?string $transactionType = null,
        public ?PaymentData $payment = null
    ) {}
}
