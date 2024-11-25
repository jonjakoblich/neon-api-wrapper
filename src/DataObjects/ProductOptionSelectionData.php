<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductOptionSelectionData extends Data
{
    public function __construct(
        public string $optionId,
        public string $itemId
    ) {}
}
