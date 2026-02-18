<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ECheckPaymentData extends Data
{
    public function __construct(
        public ?string $token = null,
        public ?string $plaidAccountId = null,
        public ?string $institution = null,
        public ?string $routingNumber = null,
        public ?string $accountNumber = null,
        public ?string $accountOwner = null,
        public ?string $checkNumber = null,
        public ?string $accountType = null,
        public ?string $transactionNumber = null,
        public ?string $accountHolderEmail = null
    ) {}
}
