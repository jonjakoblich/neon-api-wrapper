<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class BaseCustomFieldGroupData extends Data
{
    public function __construct(
        public string $id,
        public string $displayName,
        public string $description
    ) {}
}
