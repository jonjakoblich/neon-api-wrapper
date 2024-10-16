<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CheckPaymentData
{
    public function __construct(
        public string $institution,
        public string $routingNumber,
        public string $accountNumber,
        public string $accountOwner,
        public string $checkNumber,
        public string $accountType
    ) {}
}
