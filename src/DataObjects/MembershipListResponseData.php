<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipListResponseData
{
    public function __construct(
        public array $memberships,
        public PaginationData $pagination
    ) {}
}
