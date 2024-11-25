<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PledgePaymentResponseData extends Data
{
    public function __construct(
        public string $pledgePaymentId,
        public float $balance,
        public float $total,
        public string $installmentId,
        public PaymentResponseData $paymentResponse
    ) {}
}
