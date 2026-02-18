<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class VolunteerRoleSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(VolunteerRoleData::class)]
        public ?array $volunteerRoleApis = [],
        public ?PaginationData $pagination = null,
    ) {}
}
