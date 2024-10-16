<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ActivityDatesData
{
    public function __construct(
        public string $startDate,
        public string $endDate,
        public string $startTime,
        public string $endTime,
        public IdNamePairData $timeZone
    ) {}
}
