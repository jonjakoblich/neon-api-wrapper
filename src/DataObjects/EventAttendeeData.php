<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class EventAttendeeData extends Data
{
    public function __construct(
        public ?int $attendeeId = null,
        public ?string $accountId = null,
        public ?string $prefix = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?bool $markedAttended = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $attendeeCustomFields = [],
        public ?string $registrantAccountId = null,
        public ?string $registrationStatus = null,
        public ?string $registrationDate = null,
        public ?string $email = null,
        public ?string $companyName = null,
        public ?string $addressLine1 = null,
        public ?string $city = null,
        public ?string $stateProvince = null,
        public ?string $zipCode = null,
        public ?string $phone1 = null,
        public ?string $phone1Type = null,
        public ?DobData $dob = null,
        public ?string $eventName = null,
        public ?string $registrationId = null,
        public ?string $ticketName = null,
    ) {}
}
