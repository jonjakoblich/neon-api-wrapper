<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventData
{
    public function __construct(
        public string $id,
        public string $name,
        public string $summary,
        public string $code,
        public int $maximumAttendees,
        public IdNamePairData $category,
        public IdNamePairData $topic,
        public IdNamePairData $campaign,
        public bool $publishEvent,
        public bool $enableEventRegistrationForm,
        public bool $archived,
        public bool $enableWaitListing,
        public bool $createAccountsforAttendees,
        public string $eventDescription,
        public EventDatesData $eventDates,
        public FinancialSettingsData $financialSettings,
        public LocationData $location
    ) {}
}
