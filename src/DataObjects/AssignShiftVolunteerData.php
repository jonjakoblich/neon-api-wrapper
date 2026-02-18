<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AssignShiftVolunteerData extends Data
{
    public function __construct(
        #[ArrayOf(ShiftVolunteerData::class)]
        public ?array $volunteers = [],
    ) {}
}
