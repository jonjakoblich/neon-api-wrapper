<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SearchCustomFieldData
{
    public function __construct(
        public string $displayName,
        public array $operators,
        public int $id
    ) {}
}
