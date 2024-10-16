<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OrderCalculationResultData
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
