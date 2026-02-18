<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CheckPaymentData extends Data
{
    public function __construct(
        public ?string $institution = null,
        public ?string $routingNumber = null,
        public ?string $accountNumber = null,
        public ?string $accountOwner = null,
        public ?string $checkNumber = null,
        public ?string $accountType = null
    ) {}
}
