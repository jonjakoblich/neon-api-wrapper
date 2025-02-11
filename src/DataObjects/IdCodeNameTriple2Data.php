<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IdCodeNameTriple2Data extends Data
{
    public function __construct(
        public string $code,
        public string $id,
        public string $name,
        public string $status,
        public bool $isDefault
    ) {}
}
