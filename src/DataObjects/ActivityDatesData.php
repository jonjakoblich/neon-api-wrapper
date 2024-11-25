<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ActivityDatesData extends Data
{
    public function __construct(
        public string $startDate,
        public string $endDate,
        public string $startTime,
        public string $endTime,
        public IdNamePairData $timeZone
    ) {}
}
