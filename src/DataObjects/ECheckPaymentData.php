<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ECheckPaymentData extends Data
{
    public function __construct(
        public string $token,
        public string $plaidAccountId,
        public string $institution,
        public string $routingNumber,
        public string $accountNumber,
        public string $accountOwner,
        public string $checkNumber,
        public string $accountType,
        public string $transactionNumber,
        public string $accountHolderEmail
    ) {}
}
