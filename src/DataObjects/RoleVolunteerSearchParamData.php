<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class RoleVolunteerSearchParamData extends Data
{
    public function __construct(
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?array $opportunityIds = null,
        public ?array $shiftIds = null,
        public ?array $groupIds = null,
    ) {}
}
