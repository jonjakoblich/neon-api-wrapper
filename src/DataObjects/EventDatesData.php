<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventDatesData
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
