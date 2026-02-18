<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class UserGroupSearchParamData extends Data
{
    public function __construct(
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?string $groupIds = null,
        public ?string $groupName = null,
    ) {}
}
