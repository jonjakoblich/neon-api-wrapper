<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ShippingMethodRequestData
{
    public function __construct(
        public string $countryId,
        public string $zipCode,
        public array $products
    ) {}
}
