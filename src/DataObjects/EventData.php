<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $summary = null,
        public ?string $code = null,
        public ?int $maximumAttendees = null,
        public ?IdNamePairData $category = null,
        public ?IdNamePairData $topic = null,
        public ?IdNamePairData $campaign = null,
        public ?bool $publishEvent = null,
        public ?bool $enableEventRegistrationForm = null,
        public ?bool $archived = null,
        public ?bool $enableWaitListing = null,
        public ?bool $createAccountsforAttendees = null,
        public ?string $eventDescription = null,
        public ?EventDatesData $eventDates = null,
        public ?FinancialSettingsData $financialSettings = null,
        public ?LocationData $location = null,
        public ?string $thumbnailUrl = null,
    ) {}
}
