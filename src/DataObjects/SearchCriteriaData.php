<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SearchCriteriaData
{
    public function __construct(
        public string $field,
        public string $operator,
        public string $value,
        public array $valueList
    ) {}
}
