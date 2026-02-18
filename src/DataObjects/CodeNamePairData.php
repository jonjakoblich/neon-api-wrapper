<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CodeNamePairData extends Data
{
    public function __construct(
        public ?string $code = null,
        public ?string $name = null,
        public ?string $status = null
    ) {}
}
