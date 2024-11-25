<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AddPaymentRequestData extends Data
{
    public function __construct(
        public string $transactionId,
        public string $transactionType,
        public PaymentData $payment
    ) {}
}
