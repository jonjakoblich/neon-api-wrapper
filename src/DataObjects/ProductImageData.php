<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductImageData extends Data
{
    public function __construct(
        public ?int $sequenceId = null,
        public ?string $url = null,
        public ?string $label = null
    ) {}
}
