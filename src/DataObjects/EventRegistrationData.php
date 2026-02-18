<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class EventRegistrationData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $eventId = null,
        public ?string $registrationDateTime = null,
        public ?string $couponCode = null,
        public ?bool $sendSystemEmail = null,
        public ?float $registrationAmount = null,
        public ?bool $ignoreCapacity = null,
        public ?string $registrantAccountId = null,
        public ?string $fundraiserAccountId = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $registrantCustomFields = [],
        #[ArrayOf(TicketData::class)]
        public ?array $tickets = [],
        public ?IdNamePairData $source = null,
        public ?OriginData $origin = null,
        public ?float $totalCharge = null,
        public ?float $totalDiscount = null,
        #[ArrayOf(PaymentData::class)]
        public ?array $payments = [],
        public ?bool $donorCoveredFeeFlag = null,
        public ?float $donorCoveredFee = null,
        public ?bool $payLater = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null,
        #[ArrayOf(DiscountItemData::class)]
        public ?array $discounts = []
    ) {}
}
