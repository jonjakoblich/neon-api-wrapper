<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class InKindPaymentData extends Data
{
    public function __construct(
        public ?float $fairMarketValue = null,
        public ?string $nccDescription = null
    ) {}
}
