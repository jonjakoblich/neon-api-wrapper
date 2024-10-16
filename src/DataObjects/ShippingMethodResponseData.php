<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ShippingMethodResponseData
{
    public function __construct(
        public string $id,
        public string $name,
        public float $fee
    ) {}
}
