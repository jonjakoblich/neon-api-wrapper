<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductShippingData extends Data
{
    public function __construct(
        public ?bool $shippingRequired = null,
        public ?float $defaultShippingCost = null,
        public ?int $pounds = null,
        public ?float $ounces = null,
        public ?int $daysToShip = null
    ) {}
}
