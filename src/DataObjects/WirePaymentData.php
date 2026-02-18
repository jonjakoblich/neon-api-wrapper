<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class WirePaymentData extends Data
{
    public function __construct(
        public ?string $wireNumber = null,
        public ?string $institution = null,
        public ?string $routingNumber = null,
        public ?string $accountNumber = null,
        public ?string $accountOwner = null
    ) {}
}
