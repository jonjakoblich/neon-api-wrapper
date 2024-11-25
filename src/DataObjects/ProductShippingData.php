<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductShippingData extends Data
{
    public function __construct(
        public bool $shippingRequired,
        public float $defaultShippingCost,
        public int $pounds,
        public float $ounces,
        public int $daysToShip
    ) {}
}
