<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AssignmentVolunteersData extends Data
{
    public function __construct(
        #[ArrayOf(ShiftAndVolunteerData::class)]
        public ?array $volunteers = [],
    ) {}
}
