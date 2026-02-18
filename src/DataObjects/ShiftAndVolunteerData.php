<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ShiftAndVolunteerData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        #[ArrayOf(ShiftInfoData::class)]
        public ?array $shifts = [],
        public ?array $opportunityRoles = null,
    ) {}
}
