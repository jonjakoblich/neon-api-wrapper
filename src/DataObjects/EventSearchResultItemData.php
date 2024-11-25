<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventSearchResultItemData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $code,
        public int $capacity,
        public bool $archived,
        public string $description,
        public string $startDate,
        public string $startTime,
        public string $endDate,
        public string $endTime,
        public bool $publishEvent,
        public bool $enableEventRegistrationForm,
        public string $addressLine1,
        public string $addressLine2,
        public string $addressLine3,
        public string $addressLine4,
        public string $addressType,
        public string $addressCity,
        public string $addressZipCode,
        public string $addressZipCodeSuffix,
        public string $addressCountry,
        public string $campaignCode,
        public string $campaignName,
        public string $fundCode,
        public string $fundName,
        public string $purposeCode,
        public string $purposeName
    ) {}
}
