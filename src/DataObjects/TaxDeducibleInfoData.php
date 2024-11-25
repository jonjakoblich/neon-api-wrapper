<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TaxDeducibleInfoData extends Data
{
    public function __construct(
        public float $nonDeductibleAmount,
        public float $taxDeducibleAmount,
        public string $nonDeductibleDescription
    ) {}
}
