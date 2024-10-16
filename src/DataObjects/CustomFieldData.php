<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CustomFieldData
{
    public function __construct(
        public string $id,
        public string $value,
        public string $name,
        public array $optionValues
    ) {}
}
