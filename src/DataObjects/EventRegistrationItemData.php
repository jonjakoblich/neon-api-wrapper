<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventRegistrationItemData
{
    public function __construct(
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public string $id,
        public string $eventId,
        public string $registrationDateTime,
        public string $couponCode,
        public float $taxDeductibleAmount,
        public bool $sendSystemEmail,
        public float $registrationAmount,
        public bool $ignoreCapacity,
        public string $registrantAccountId,
        public string $fundraiserAccountId,
        public array $registrantCustomFields,
        public array $tickets,
        public IdNamePairData $source
    ) {}
}
