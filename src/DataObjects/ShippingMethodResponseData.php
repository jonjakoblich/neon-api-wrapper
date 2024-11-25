<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShippingMethodResponseData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public float $fee
    ) {}
}
