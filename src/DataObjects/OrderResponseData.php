<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OrderResponseData
{
    public function __construct(
        public string $id,
        public string $accountId,
        public string $status,
        public PaymentResponseData $paymentResponse
    ) {}
}
