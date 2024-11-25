<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SubMembershipResponseData extends Data
{
    public function __construct(
        public string $id,
        public string $accountId,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public string $status
    ) {}
}
