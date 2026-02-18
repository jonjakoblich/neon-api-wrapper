<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CraInfoData extends Data
{
    public function __construct(
        public ?float $advantageAmount = null,
        public ?float $eligibleAmount = null,
        public ?string $advantageDescription = null
    ) {}
}
