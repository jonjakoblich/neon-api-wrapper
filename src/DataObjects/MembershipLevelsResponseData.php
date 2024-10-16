<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipLevelsResponseData
{
    public function __construct(
        public array $membershipLevels,
        public PaginationData $pagination
    ) {}
}
