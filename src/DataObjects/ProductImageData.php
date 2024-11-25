<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductImageData extends Data
{
    public function __construct(
        public int $sequenceId,
        public string $url,
        public string $label
    ) {}
}
