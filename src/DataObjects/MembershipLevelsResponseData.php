<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipLevelsResponseData extends Data
{
    public function __construct(
        public array $membershipLevels,
        public PaginationData $pagination
    ) {}
}
