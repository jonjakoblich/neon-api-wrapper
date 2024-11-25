<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TributeData extends Data
{
    public function __construct(
        public string $name,
        public string $type
    ) {}
}
