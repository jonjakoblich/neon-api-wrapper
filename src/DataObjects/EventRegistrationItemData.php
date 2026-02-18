<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class EventRegistrationItemData extends Data
{
    public function __construct(
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null,
        public ?string $id = null,
        public ?string $eventId = null,
        public ?string $registrationDateTime = null,
        public ?string $couponCode = null,
        public ?float $taxDeductibleAmount = null,
        public ?bool $sendSystemEmail = null,
        public ?float $registrationAmount = null,
        public ?bool $ignoreCapacity = null,
        public ?string $registrantAccountId = null,
        public ?string $fundraiserAccountId = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $registrantCustomFields = [],
        #[ArrayOf(TicketData::class)]
        public ?array $tickets = [],
        public ?IdNamePairData $source = null
    ) {}
}
