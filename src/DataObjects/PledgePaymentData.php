<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PledgePaymentData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $pledgeId = null,
        public ?string $date = null,
        public ?string $installmentId = null,
        public ?PaymentData $payment = null,
        public ?TimestampsData $timestamps = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null,
        public ?bool $donorCoveredFeeFlag = null,
        public ?float $donorCoveredFee = null,
        public ?OriginData $origin = null,
        public ?bool $sendMatchedDonorEmail = null,
        public ?bool $sendMatchedDonorLetter = null,
        public ?bool $sendAcknowledgeEmail = null,
        public ?bool $sendAcknowledgeLetter = null
    ) {}
}
