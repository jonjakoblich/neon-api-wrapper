<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventRegistrationResponseData
{
    public function __construct(
        public int $id,
        public string $accountId,
        public string $status,
        public PaymentResponseData $paymentResponse
    ) {}
}
