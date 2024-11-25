<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipListResponseData extends Data
{
    public function __construct(
        public array $memberships,
        public PaginationData $pagination
    ) {}
}
