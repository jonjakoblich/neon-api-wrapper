<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IdCodeNameTriple2Data extends Data
{
    public function __construct(
        public ?string $code = null,
        public ?string $id = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?bool $isDefault = null
    ) {}
}
