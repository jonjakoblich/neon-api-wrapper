<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class WirePaymentData extends Data
{
    public function __construct(
        public string $wireNumber,
        public string $institution,
        public string $routingNumber,
        public string $accountNumber,
        public string $accountOwner
    ) {}
}
