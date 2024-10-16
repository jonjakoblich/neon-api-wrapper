<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TaxDeductiblePortionData
{
    public function __construct(
        public IdNamePairData $fund,
        public IdNamePairData $purpose
    ) {}
}
