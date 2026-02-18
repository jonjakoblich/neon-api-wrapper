<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ActivityDatesData extends Data
{
    public function __construct(
        public ?string $startDate = null,
        public ?string $endDate = null,
        public ?string $startTime = null,
        public ?string $endTime = null,
        public ?IdNamePairData $timeZone = null
    ) {}
}
