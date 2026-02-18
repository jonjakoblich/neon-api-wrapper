<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;
use TwoJays\NeonApiWrapper\Enums\OpportunityStatus;

class OpportunityData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $sysUserAccountId = null,
        public ?string $contactId = null,
        public ?string $eventId = null,
        public ?string $ngEventId = null,
        #[ArrayOf(IdNamePairData::class)]
        public ?array $categories = [],
        public ?string $name = null,
        public ?string $description = null,
        public ?string $startDate = null,
        public ?string $endDate = null,
        public ?int $maxVolunteers = null,
        public ?bool $mileageEnabled = null,
        public ?bool $expensesEnabled = null,
        public ?bool $shiftEnabled = null,
        public ?OpportunityStatus $status = null,
        public ?bool $availableOnline = null,
        public ?string $locationName = null,
        public ?AddressData $address = null,
        public ?TimestampsData $timestamps = null,
    ) {}
}
