<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class GrantData extends Data
{
    public function __construct(
        public string $id,
        public string $accountId,
        public IdNamePairData $status,
        public string $systemUserId,
        public string $grantName,
        public string $dueDate,
        public string $closeDate,
        public float $askAmount,
        public string $fundedDate,
        public float $fundedAmount,
        public string $note,
        public IdNamePairData $campaign,
        public IdNamePairData $fund,
        public IdNamePairData $purpose,
        public array $grantCustomFields,
        public string $linkedTransactionId,
        public string $createdBy,
        public string $createdDate,
        public string $lastModifiedBy,
        public string $lastModifiedDate
    ) {}
}
