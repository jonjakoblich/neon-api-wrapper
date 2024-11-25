<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class GenerosityIndicatorData extends Data
{
    public function __construct(
        public float $indicator,
        public int $affinity,
        public int $recency,
        public int $frequency,
        public int $monetaryValue
    ) {}
}
