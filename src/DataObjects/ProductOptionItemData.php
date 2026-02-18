<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductOptionItemData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?float $priceAdjustment = null,
        public ?float $advantageAmountAdjustment = null,
        public ?float $nonDeductibleAmountAdjustment = null,
        public ?string $name = null,
        public ?string $status = null
    ) {}
}
