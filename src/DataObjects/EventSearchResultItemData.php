<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventSearchResultItemData extends Data
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
        public ?string $code = null,
        public ?int $capacity = null,
        public ?bool $archived = null,
        public ?string $description = null,
        public ?string $startDate = null,
        public ?string $startTime = null,
        public ?string $endDate = null,
        public ?string $endTime = null,
        public ?bool $publishEvent = null,
        public ?bool $enableEventRegistrationForm = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $addressLine4 = null,
        public ?string $addressType = null,
        public ?string $addressCity = null,
        public ?string $addressZipCode = null,
        public ?string $addressZipCodeSuffix = null,
        public ?string $addressCountry = null,
        public ?string $campaignCode = null,
        public ?string $campaignName = null,
        public ?string $fundCode = null,
        public ?string $fundName = null,
        public ?string $purposeCode = null,
        public ?string $purposeName = null,
        public ?string $thumbnailUrl = null,
    ) {}
}
