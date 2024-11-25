<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventAttendeesData extends Data
{
    public function __construct(
        public PaginationData $pagination,
        public array $attendees
    ) {}
}
