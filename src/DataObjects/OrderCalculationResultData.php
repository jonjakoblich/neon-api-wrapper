<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OrderCalculationResultData extends Data
{
    public function __construct(
        public ?float $totalCharge = null,
        public ?float $subTotal = null,
        public ?float $tax = null,
        public ?float $totalDiscount = null,
        public ?float $shippingHandlingFee = null,
        #[ArrayOf(DiscountItemData::class)]
        public ?array $discounts = []
    ) {}
}
