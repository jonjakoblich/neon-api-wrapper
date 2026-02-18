<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TaxDeducibleInfoData extends Data
{
    public function __construct(
        public ?float $nonDeductibleAmount = null,
        public ?float $taxDeducibleAmount = null,
        public ?string $nonDeductibleDescription = null
    ) {}
}
