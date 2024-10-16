<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductShippingData
{
    public function __construct(
        public bool $shippingRequired,
        public float $defaultShippingCost,
        public int $pounds,
        public float $ounces,
        public int $daysToShip
    ) {}
}
