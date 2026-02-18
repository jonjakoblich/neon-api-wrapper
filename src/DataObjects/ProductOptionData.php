<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ProductOptionData extends Data
{
    public function __construct(
        public ?string $id = null,
        #[ArrayOf(ProductOptionItemData::class)]
        public ?array $items = null,
        public ?string $name = null,
        public ?string $status = null
    ) {}
}
