<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class InKindPaymentData
{
    public function __construct(
        public float $fairMarketValue,
        public string $nccDescription
    ) {}
}
