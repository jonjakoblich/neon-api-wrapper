<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShiftVolunteerData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?array $shiftRoles = null,
        public ?array $opportunityRoles = null,
    ) {}
}
