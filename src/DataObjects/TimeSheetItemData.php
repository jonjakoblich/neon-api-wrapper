<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TimeSheetItemData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $timeSheetId = null,
        public ?string $shiftId = null,
        public ?string $roleId = null,
        public ?string $date = null,
        public ?float $hours = null,
        public ?float $expenses = null,
        public ?float $mileages = null,
        public ?TimestampsData $timestamps = null,
    ) {}
}
