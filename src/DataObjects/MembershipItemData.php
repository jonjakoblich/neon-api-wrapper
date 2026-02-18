<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipItemData extends Data
{
    public function __construct(
        public ?string $id = null,
        #[ArrayOf(SubMembershipData::class)]
        public ?array $subMembers = [],
        public ?string $parentId = null,
        public ?string $accountId = null,
        public ?IdNamePairData $membershipLevel = null,
        public ?IdNamePairData $membershipTerm = null,
        public ?bool $autoRenewal = null,
        public ?IdNamePairData $source = null,
        public ?string $changeType = null,
        public ?string $termUnit = null,
        public ?int $termDuration = null,
        public ?string $enrollType = null,
        public ?string $transactionDate = null,
        public ?string $termStartDate = null,
        public ?string $termEndDate = null,
        public ?float $fee = null,
        public ?string $couponCode = null,
        public ?bool $sendAcknowledgeEmail = null,
        public ?string $status = null,
        public ?int $complimentary = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $membershipCustomFields = [],
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null,
        public ?TimestampsData $timestamps = null,
        public ?OriginData $origin = null,
        public ?bool $sendAutoRenewalEnabledEmail = null
    ) {}
}
