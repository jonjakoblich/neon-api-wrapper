<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class EventAttendeesData extends Data
{
    public function __construct(
        public ?PaginationData $pagination = null,
        #[ArrayOf(EventAttendeeData::class)]
        public ?array $attendees = []
    ) {}
}
