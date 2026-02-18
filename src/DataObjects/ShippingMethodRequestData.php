<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ShippingMethodRequestData extends Data
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $zipCode = null,
        #[ArrayOf(ProductItemData::class)]
        public ?array $products = []
    ) {}
}
