<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class StandardFieldData
{
    public function __construct(
        public string $fieldName,
        public array $operators
    ) {}
}
