<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PledgePaymentResponseData
{
    public function __construct(
        public string $pledgePaymentId,
        public float $balance,
        public float $total,
        public string $installmentId,
        public PaymentResponseData $paymentResponse
    ) {}
}
