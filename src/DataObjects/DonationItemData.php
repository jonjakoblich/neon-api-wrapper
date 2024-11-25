<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DonationItemData extends Data
{
    public function __construct(
        public string $donorName,
        public string $id,
        public bool $sendAcknowledgeEmail,
        public string $accountId,
        public string $batchNumber,
        public string $date,
        public float $amount,
        public string $anonymousType,
        public string $status,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public OriginData $origin,
        public IdNamePairData $purpose,
        public IdNamePairData $source,
        public IdNamePairData $campaign,
        public IdNamePairData $solicitationMethod,
        public AcknowledgeeData $acknowledgee,
        public IdNamePairData $fund,
        public TimestampsData $timestamps,
        public TributeData $tribute,
        public array $donationCustomFields,
        public string $fundraiserAccountId
    ) {}
}
