<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TicketData
{
    public function __construct(
        public int $ticketId,
        public int $ticketSequence,
        public array $attendees
    ) {}
}
