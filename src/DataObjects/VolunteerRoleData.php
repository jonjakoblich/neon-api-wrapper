<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;
use TwoJays\NeonApiWrapper\Enums\StatusColor;
use TwoJays\NeonApiWrapper\Enums\VolunteerRoleStatus;

class VolunteerRoleData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?StatusColor $statusColor = null,
        public ?VolunteerRoleStatus $status = null,
        public ?TimestampsData $timestamps = null,
    ) {}
}
