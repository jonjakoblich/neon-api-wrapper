<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductOptionItemData extends Data
{
    public function __construct(
        public string $id,
        public float $priceAdjustment,
        public float $advantageAmountAdjustment,
        public float $nonDeductibleAmountAdjustment,
        public string $name,
        public string $status
    ) {}
}
