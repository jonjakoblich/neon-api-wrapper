<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShippingMethodResponseData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?float $fee = null
    ) {}
}
