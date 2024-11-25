<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PledgePaymentData extends Data
{
    public function __construct(
        public string $id,
        public string $pledgeId,
        public string $date,
        public string $installmentId,
        public PaymentData $payment,
        public TimestampsData $timestamps,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo,
        public bool $donorCoveredFeeFlag,
        public float $donorCoveredFee,
        public OriginData $origin,
        public bool $sendMatchedDonorEmail,
        public bool $sendMatchedDonorLetter,
        public bool $sendAcknowledgeEmail,
        public bool $sendAcknowledgeLetter
    ) {}
}
