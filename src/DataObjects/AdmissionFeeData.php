<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AdmissionFeeData
{
    public function __construct(
        public float $fee,
        public float $taxDeductiblePercent,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
