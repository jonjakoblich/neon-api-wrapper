<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipTermData extends Data
{
    public function __construct(
        public int $id,
        public IdNamePairData $membershipLevel,
        public string $display,
        public string $type,
        public int $duration,
        public string $unit,
        public float $fee,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public array $childTerms
    ) {}
}
