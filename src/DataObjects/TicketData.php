<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TicketData extends Data
{
    public function __construct(
        public int $ticketId,
        public int $ticketSequence,
        public array $attendees
    ) {}
}
