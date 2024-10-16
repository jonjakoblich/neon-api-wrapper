<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductOptionSelectionData
{
    public function __construct(
        public string $optionId,
        public string $itemId
    ) {}
}
