<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DobData extends Data
{
    public function __construct(
        public string $day,
        public string $month,
        public string $year
    ) {}
}
