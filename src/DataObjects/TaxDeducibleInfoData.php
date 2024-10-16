<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TaxDeducibleInfoData
{
    public function __construct(
        public float $nonDeductibleAmount,
        public float $taxDeducibleAmount,
        public string $nonDeductibleDescription
    ) {}
}
