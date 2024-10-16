<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventTicketData
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
