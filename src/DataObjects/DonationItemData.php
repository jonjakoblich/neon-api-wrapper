<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class DonationItemData extends Data
{
    public function __construct(
        public ?string $publicRecognitionName = null,
        public ?string $donorName = null,
        public ?string $id = null,
        public ?bool $sendAcknowledgeEmail = null,
        public ?string $accountId = null,
        public ?string $batchNumber = null,
        public ?string $date = null,
        public ?float $amount = null,
        public ?string $anonymousType = null,
        public ?string $status = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null,
        public ?OriginData $origin = null,
        public ?IdNamePairData $purpose = null,
        public ?IdNamePairData $source = null,
        public ?IdNamePairData $campaign = null,
        public ?IdNamePairData $solicitationMethod = null,
        public ?AcknowledgeeData $acknowledgee = null,
        public ?IdNamePairData $fund = null,
        public ?TimestampsData $timestamps = null,
        public ?TributeData $tribute = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $donationCustomFields = null,
        public ?SolicitorData $solicitor = null,
        public ?string $fundraiserAccountId = null
    ) {}
}
