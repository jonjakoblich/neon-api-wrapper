<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SearchFieldsData extends Data
{
    public function __construct(
        public array $standardFields,
        public array $customFields
    ) {}
}
