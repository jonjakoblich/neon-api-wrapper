<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CodeNamePairData extends Data
{
    public function __construct(
        public ?string $code,
        public ?string $name,
        public ?string $status
    ) {}
}
