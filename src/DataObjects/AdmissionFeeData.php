<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AdmissionFeeData extends Data
{
    public function __construct(
        public ?float $fee = null,
        public ?float $taxDeductiblePercent = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null
    ) {}
}
