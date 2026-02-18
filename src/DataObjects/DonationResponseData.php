<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DonationResponseData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $accountId = null,
        public ?string $status = null,
        public ?PaymentResponseData $paymentResponse = null
    ) {}
}
