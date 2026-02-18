<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventTicketData extends Data
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?float $fee = null,
        public ?int $maxNumberAvailable = null,
        public ?int $numberRemaining = null,
        public ?string $attendeesPerTicketType = null,
        public ?int $attendeesPerTicketNumber = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null
    ) {}
}
