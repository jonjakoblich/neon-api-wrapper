<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShiftInfoData extends Data
{
    public function __construct(
        public ?string $shiftId = null,
        public ?array $roleIds = null,
    ) {}
}
