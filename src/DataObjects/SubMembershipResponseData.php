<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SubMembershipResponseData
{
    public function __construct(
        public string $id,
        public string $accountId,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public string $status
    ) {}
}
