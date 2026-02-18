<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class VolunteerData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $smsNumber = null,
        public ?array $opportunityIds = null,
        public ?array $shiftIds = null,
        public ?array $roles = null,
        public ?array $groupIds = null,
        public ?float $totalHours = null,
        public ?float $totalExpenses = null,
        public ?float $totalMileages = null,
    ) {}
}
