<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class GenerosityIndicatorData
{
    public function __construct(
        public float $indicator,
        public int $affinity,
        public int $recency,
        public int $frequency,
        public int $monetaryValue
    ) {}
}
