<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DiscountItemData extends Data
{
    public function __construct(
        public ?string $orderItemId = null,
        public ?string $orderItemName = null,
        public ?string $orderItemType = null,
        public ?string $discountId = null,
        public ?string $discountName = null,
        public ?float $discount = null
    ) {}
}
