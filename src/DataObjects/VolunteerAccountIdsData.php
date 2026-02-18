<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class VolunteerAccountIdsData extends Data
{
    public function __construct(
        public ?array $accountIds = null,
    ) {}
}
