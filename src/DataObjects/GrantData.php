<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class GrantData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $accountId = null,
        public ?IdNamePairData $status = null,
        public ?string $systemUserId = null,
        public ?string $grantName = null,
        public ?string $dueDate = null,
        public ?string $closeDate = null,
        public ?float $askAmount = null,
        public ?string $fundedDate = null,
        public ?float $fundedAmount = null,
        public ?string $note = null,
        public ?IdNamePairData $campaign = null,
        public ?IdNamePairData $fund = null,
        public ?IdNamePairData $purpose = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $grantCustomFields = [],
        public ?string $linkedTransactionId = null,
        public ?string $createdBy = null,
        public ?string $createdDate = null,
        public ?string $lastModifiedBy = null,
        public ?string $lastModifiedDate = null,
        public ?string $parentGrantId = null,
        public ?string $committedDate = null,
        public ?float $committedAmount = null
    ) {}
}
