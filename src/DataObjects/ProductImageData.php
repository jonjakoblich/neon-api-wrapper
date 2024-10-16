<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductImageData
{
    public function __construct(
        public int $sequenceId,
        public string $url,
        public string $label
    ) {}
}
