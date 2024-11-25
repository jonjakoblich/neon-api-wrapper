<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TaxDeductiblePortionData extends Data
{
    public function __construct(
        public IdNamePairData $fund,
        public IdNamePairData $purpose
    ) {}
}
