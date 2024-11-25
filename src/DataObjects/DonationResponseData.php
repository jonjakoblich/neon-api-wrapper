<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DonationResponseData extends Data
{
    public function __construct(
        public string $id,
        public string $accountId,
        public string $status,
        public PaymentResponseData $paymentResponse
    ) {}
}
