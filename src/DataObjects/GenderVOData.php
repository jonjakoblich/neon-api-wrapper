<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class GenderVOData extends Data
{
    public function __construct(
        public string $code,
        public string $description,
        public string $status,
        public int $position
    ) {}
}
