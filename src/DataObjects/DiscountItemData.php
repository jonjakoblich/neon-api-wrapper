<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class DiscountItemData
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
