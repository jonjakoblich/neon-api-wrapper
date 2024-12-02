<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipListResponseData extends Data
{
    public function __construct(
        #[ArrayOf(MembershipData::class)]
        public ?array $memberships,
        public PaginationData $pagination
    ) {}
}
