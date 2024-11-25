<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CustomFieldGroupData extends Data
{
    public function __construct(
        public string $component,
        public string $id,
        public string $displayName,
        public string $description
    ) {}
}
