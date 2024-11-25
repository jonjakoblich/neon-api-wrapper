<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipLevelData extends Data
{
    public function __construct(
        public int $id,
        public string $description,
        public string $code,
        public int $rank,
        public string $type,
        public string $status,
        public bool $forceAutoRenewal,
        public int $childMemberAllowed,
        public string $scopeType
    ) {}
}
