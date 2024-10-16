<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductOptionItemData
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
