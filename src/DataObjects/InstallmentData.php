<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class InstallmentData
{
    public function __construct(
        public string $id,
        public string $expectedDate,
        public float $amount,
        public string $pledgeId,
        public array $pledgePaymentIds
    ) {}
}
