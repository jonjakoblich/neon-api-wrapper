<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DobData extends Data
{
    public function __construct(
        public ?string $day = null,
        public ?string $month = null,
        public ?string $year = null
    ) {}
}
