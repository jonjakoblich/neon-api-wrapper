<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DafPayPaymentData extends Data
{
    public function __construct(
        public ?string $distributionId = null,
        public ?string $daf = null
    ) {}
}
