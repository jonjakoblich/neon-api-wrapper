<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountOrderItemData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public string $type,
        public float $unitPrice,
        public int $quantity,
        public float $price
    ) {}
}
