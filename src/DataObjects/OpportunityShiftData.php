<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OpportunityShiftData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $occurrenceId = null,
        public ?string $ngOccurrenceId = null,
        public ?string $name = null,
        public ?string $startDate = null,
        public ?string $endDate = null,
        public ?string $description = null,
        public ?int $timezoneId = null,
        public ?int $maxVolunteer = null,
        public ?string $locationName = null,
        public ?bool $syncLocation = null,
        public ?AddressData $address = null,
        public ?TimestampsData $timestamps = null,
    ) {}
}
