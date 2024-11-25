<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShippingMethodRequestData extends Data
{
    public function __construct(
        public string $countryId,
        public string $zipCode,
        public array $products
    ) {}
}
