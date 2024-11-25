<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class InstallmentData extends Data
{
    public function __construct(
        public string $id,
        public string $expectedDate,
        public float $amount,
        public string $pledgeId,
        public array $pledgePaymentIds
    ) {}
}
