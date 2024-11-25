<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DiscountItemData extends Data
{
    public function __construct(
        public string $orderItemId,
        public string $orderItemName,
        public string $orderItemType,
        public string $discountId,
        public string $discountName,
        public float $discount
    ) {}
}
