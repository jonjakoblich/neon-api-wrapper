<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;
use TwoJays\NeonApiWrapper\Enums\TimeSheetStatus;

class TimeSheetData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $accountId = null,
        public ?string $projectId = null,
        public ?string $weekOf = null,
        #[ArrayOf(TimeSheetItemData::class)]
        public ?array $timeSheetItems = [],
        public ?TimeSheetStatus $status = null,
        public ?float $totalHours = null,
        public ?float $totalExpenses = null,
        public ?float $totalMileages = null,
        public ?string $approvalDatetime = null,
        public ?string $approvalBy = null,
        public ?TimestampsData $timestamps = null,
    ) {}
}
