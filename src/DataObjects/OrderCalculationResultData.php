<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrderCalculationResultData extends Data
{
    public function __construct(
        public float $totalCharge,
        public float $subTotal,
        public float $tax,
        public float $totalDiscount,
        public float $shippingHandlingFee,
        public array $discounts
    ) {}
}
