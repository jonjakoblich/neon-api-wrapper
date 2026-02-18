<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class GenderVOData extends Data
{
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
        public ?string $status = null,
        public ?int $position = null
    ) {}
}
