<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class GenerosityIndicatorData extends Data
{
    public function __construct(
        public ?float $indicator = null,
        public ?int $affinity = null,
        public ?int $recency = null,
        public ?int $frequency = null,
        public ?int $monetaryValue = null
    ) {}
}
