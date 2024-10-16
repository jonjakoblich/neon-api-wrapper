<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventAttendeeData
{
    public function __construct(
        public int $attendeeId,
        public string $accountId,
        public string $firstName,
        public string $lastName,
        public bool $markedAttended,
        public array $attendeeCustomFields,
        public string $registrantAccountId,
        public string $registrationStatus,
        public string $registrationDate
    ) {}
}