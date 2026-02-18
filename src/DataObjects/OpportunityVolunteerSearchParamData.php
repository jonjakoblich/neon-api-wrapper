<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OpportunityVolunteerSearchParamData extends Data
{
    public function __construct(
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?array $shiftIds = null,
        public ?array $groupIds = null,
        public ?array $roleIds = null,
    ) {}
}
