<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AdmissionFeeData extends Data
{
    public function __construct(
        public float $fee,
        public float $taxDeductiblePercent,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
