<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipItemData
{
    public function __construct(
        public string $id,
        public array $subMembers,
        public string $parentId,
        public string $accountId,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public bool $autoRenewal,
        public IdNamePairData $source,
        public string $changeType,
        public string $termUnit,
        public int $termDuration,
        public string $enrollType,
        public string $transactionDate,
        public string $termStartDate,
        public string $termEndDate,
        public float $fee,
        public string $couponCode,
        public bool $sendAcknowledgeEmail,
        public string $status,
        public int $complimentary,
        public array $membershipCustomFields,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public TimestampsData $timestamps,
        public OriginData $origin,
        public bool $sendAutoRenewalEnabledEmail
    ) {}
}
