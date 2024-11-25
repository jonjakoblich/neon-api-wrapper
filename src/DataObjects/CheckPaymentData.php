<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CheckPaymentData extends Data
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
