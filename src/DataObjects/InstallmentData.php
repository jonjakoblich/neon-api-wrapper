<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class InstallmentData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $expectedDate = null,
        public ?float $amount = null,
        public ?string $pledgeId = null,
        public ?array $pledgePaymentIds = []
    ) {}
}
