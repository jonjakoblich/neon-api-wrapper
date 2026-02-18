<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class SearchFieldsData extends Data
{
    public function __construct(
        #[ArrayOf(StandardFieldData::class)]
        public array $standardFields,
        #[ArrayOf(SearchCustomFieldData::class)]
        public array $customFields
    ) {}
}
