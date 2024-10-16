<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MoveToGroupData
{
    public function __construct(
        public string $groupId,
        public array $customFields
    ) {}
}
