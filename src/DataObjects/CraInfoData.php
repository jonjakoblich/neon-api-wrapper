<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CraInfoData extends Data
{
    public function __construct(
        public float $advantageAmount,
        public float $eligibleAmount,
        public string $advantageDescription
    ) {}
}
