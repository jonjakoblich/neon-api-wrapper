<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MoveToGroupData extends Data
{
    public function __construct(
        public string $groupId,
        public array $customFields
    ) {}
}
