<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PledgeData
{
    public function __construct(
        public string $donorName,
        public string $id,
        public string $matchedDonationId,
        public string $accountId,
        public string $date,
        public float $amount,
        public string $anonymousType,
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
