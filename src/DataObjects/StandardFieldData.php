<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class StandardFieldData extends Data
{
    public function __construct(
        public string $fieldName,
        public array $operators
    ) {}
}
