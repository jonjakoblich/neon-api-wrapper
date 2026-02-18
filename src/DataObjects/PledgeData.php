<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class PledgeData extends Data
{
    public function __construct(
        public ?string $publicRecognitionName = null,
        public ?string $donorName = null,
        public ?string $id = null,
        public ?string $matchedDonationId = null,
        public ?string $accountId = null,
        public ?string $date = null,
        public ?float $amount = null,
        public ?string $pledgeStatus = null,
        public ?string $anonymousType = null,
        public ?IdNamePairData $purpose = null,
        public ?IdNamePairData $source = null,
        public ?IdNamePairData $campaign = null,
        public ?IdNamePairData $solicitationMethod = null,
        public ?AcknowledgeeData $acknowledgee = null,
        public ?IdNamePairData $fund = null,
        public ?TimestampsData $timestamps = null,
        public ?TributeData $tribute = null,
        #[ArrayOf(CustomFieldData::class)]
        public ?array $donationCustomFields = [],
        public ?SolicitorData $solicitor = null,
        public ?string $fundraiserAccountId = null,
        public ?string $expectedDate = null,
        public ?DafPayPaymentData $dafpay = null,
    ) {}
}
