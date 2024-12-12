<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipCalculateResultData extends Data
{
    public function __construct(
        public float $subTotal,
        public float $totalDiscount,
        public float $totalCharge,
        #[ArrayOf(DiscountItemData::class)]
        public ?array $discounts
    ) {}
}
