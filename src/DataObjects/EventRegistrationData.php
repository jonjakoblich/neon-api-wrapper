<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventRegistrationData extends Data
{
    public function __construct(
        public string $id,
        public string $eventId,
        public string $registrationDateTime,
        public string $couponCode,
        public bool $sendSystemEmail,
        public float $registrationAmount,
        public bool $ignoreCapacity,
        public string $registrantAccountId,
        public string $fundraiserAccountId,
        public array $registrantCustomFields,
        public array $tickets,
        public IdNamePairData $source,
        public OriginData $origin,
        public float $totalCharge,
        public float $totalDiscount,
        public array $payments,
        public bool $donorCoveredFeeFlag,
        public float $donorCoveredFee,
        public bool $payLater,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public array $discounts
    ) {}
}
