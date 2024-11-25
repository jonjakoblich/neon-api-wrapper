<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SearchCustomFieldData extends Data
{
    public function __construct(
        public string $displayName,
        public array $operators,
        public int $id
    ) {}
}
