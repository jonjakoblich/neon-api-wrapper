<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventDatesData extends Data
{
    public function __construct(
        public ?string $startDate = null,
        public ?string $endDate = null,
        public ?string $startTime = null,
        public ?string $endTime = null,
        public ?string $registrationOpenDate = null,
        public ?string $registrationCloseDate = null,
        public ?IdNamePairData $timeZone = null
    ) {}
}
