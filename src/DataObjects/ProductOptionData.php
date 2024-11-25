<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductOptionData extends Data
{
    public function __construct(
        public string $id,
        public array $items,
        public string $name,
        public string $status
    ) {}
}
