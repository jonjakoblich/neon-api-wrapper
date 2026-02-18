<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class DonationData extends Data
{
    public function __construct(
        public ?string $batchNumber,
        public ?string $publicRecognitionName,
        public ?string $donorName,
        public string $id,
        public string $accountId,
        public string $date,
        public ?bool $sendAcknowledgeEmail,
        public float $amount,
        public string $anonymousType,
        public ?bool $sendAcknowledgeLetter,
        public ?bool $donorCoveredFeeFlag,
        public ?IdNamePairData $purpose,
        public ?IdNamePairData $source,
        public ?IdNamePairData $campaign,
        public ?float $donorCoveredFee,
        public ?IdNamePairData $solicitationMethod,
        public ?AcknowledgeeData $acknowledgee,
        public ?IdNamePairData $fund,
        public ?bool $payLater,
        #[ArrayOf(PaymentData::class)]
        public array $payments,
        public TimestampsData $timestamps,
        public ?TributeData $tribute,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $donationCustomFields,
        public ?SolicitorData $solicitor,
        public ?string $fundraiserAccountId,
        public string $status,
        public ?CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public OriginData $origin
    ) {}
}
