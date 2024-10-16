<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class DonationResponseData
{
    public function __construct(
        public string $id,
        public string $accountId,
        public string $status,
        public PaymentResponseData $paymentResponse
    ) {}
}
