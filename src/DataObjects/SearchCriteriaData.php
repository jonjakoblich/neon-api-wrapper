<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SearchCriteriaData extends Data
{
    public function __construct(
        public string $field,
        public string $operator,
        public string $value,
        public array $valueList
    ) {}
}
