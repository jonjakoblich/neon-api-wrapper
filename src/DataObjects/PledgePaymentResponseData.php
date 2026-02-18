<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PledgePaymentResponseData extends Data
{
    public function __construct(
        public ?string $pledgePaymentId = null,
        public ?float $balance = null,
        public ?float $total = null,
        public ?string $installmentId = null,
        public ?PaymentResponseData $paymentResponse = null
    ) {}
}
