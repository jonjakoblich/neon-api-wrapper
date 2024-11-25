<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventTicketData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public float $fee,
        public int $maxNumberAvailable,
        public int $numberRemaining,
        public string $attendeesPerTicketType,
        public int $attendeesPerTicketNumber,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
