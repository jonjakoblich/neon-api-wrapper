<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IdNamePairData extends Data
{
    public function __construct(
        public ?string $id,
        public ?string $name,
        public ?string $status
    ) {}
}
