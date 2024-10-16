<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ECheckPaymentData
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
