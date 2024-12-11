<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipLevelsResponseData extends Data
{
    public function __construct(
        #[ArrayOf(MembershipLevelData::class)]
        public array $membershipLevels,
        public PaginationData $pagination
    ) {}
}
