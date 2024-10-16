<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventAttendeesData
{
    public function __construct(
        public PaginationData $pagination,
        public array $attendees
    ) {}
}
