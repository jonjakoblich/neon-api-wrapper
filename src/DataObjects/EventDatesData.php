<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventDatesData extends Data
{
    public function __construct(
        public string $startDate,
        public string $endDate,
        public string $startTime,
        public string $endTime,
        public string $registrationOpenDate,
        public string $registrationCloseDate,
        public IdNamePairData $timeZone
    ) {}
}
