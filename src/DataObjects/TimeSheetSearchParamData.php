<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TimeSheetSearchParamData extends Data
{
    public function __construct(
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?string $ids = null,
        public ?string $accountIds = null,
        public ?string $projectIds = null,
        public ?string $volunteerGroups = null,
        public ?string $roleIds = null,
        public ?string $shiftIds = null,
        public ?array $statusList = null,
    ) {}
}
