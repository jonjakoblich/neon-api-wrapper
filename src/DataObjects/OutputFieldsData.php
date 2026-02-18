<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OutputFieldsData extends Data
{
    public function __construct(
        public ?array $standardFields = [],
        #[ArrayOf(CustomFieldData::class)]
        public ?array $customFields = []
    ) {}
}
