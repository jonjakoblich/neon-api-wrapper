<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class UserGroupSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(UserGroupData::class)]
        public ?array $groupList = [],
        public ?PaginationData $pagination = null,
    ) {}
}
