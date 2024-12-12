<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class CustomFieldData extends Data
{
    public function __construct(
        public string $id,
        public string $value,
        public string $name,
        #[ArrayOf(CustomFieldOptionData::class)]
        public array $optionValues
    ) {}
}
