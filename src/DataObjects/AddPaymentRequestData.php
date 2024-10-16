<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AddPaymentRequestData
{
    public function __construct(
        public string $transactionId,
        public string $transactionType,
        public PaymentData $payment
    ) {}
}
