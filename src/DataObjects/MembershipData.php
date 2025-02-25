<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipData extends Data
{
    public function __construct(
        public string $accountId,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public string $transactionDate,
        public float $totalCharge,
        public ?string $id,
        public ?string $parentId,
        public ?bool $autoRenewal,
        public ?IdNamePairData $source,
        public ?string $changeType,
        public ?string $termUnit,
        public ?int $termDuration,
        public ?string $enrollType,
        public ?string $termStartDate,
        public ?string $termEndDate,
        public ?float $fee,
        public ?string $couponCode,
        public ?bool $sendAcknowledgeEmail,
        public ?string $status,
        public ?int $complimentary,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $membershipCustomFields,
        public ?TaxDeducibleInfoData $taxDeductibleInfo,
        public ?TimestampsData $timestamps,
        public ?OriginData $origin,
        public ?bool $sendAutoRenewalEnabledEmail,
        public ?bool $payLater,
        #[ArrayOf(PaymentData::class)]
        public ?array $payments,
        public ?bool $donorCoveredFeeFlag,
        public ?float $donorCoveredFee,
        public ?float $totalDiscount,
        #[ArrayOf(DiscountItemData::class)]
        public ?array $discounts,
        public ?CraInfoData $craInfo,
        #[ArrayOf(SubMembershipData::class)]
        public ?array $subMembers,
    ) {}
}
