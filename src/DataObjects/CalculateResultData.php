<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CalculateResultData extends Data
{
    public function __construct(
        public ?float $totalCharge = null
    ) {}
}
