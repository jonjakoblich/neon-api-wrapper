<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class RecurringDonationData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?int $recurringPeriod = null,
        public ?string $accountId = null,
        public ?string $recurringPeriodType = null,
        public ?float $amount = null,
        public ?string $nextDate = null,
        public ?string $endDate = null,
        public ?IdNamePairData $purpose = null,
        public ?IdNamePairData $campaign = null,
        public ?CreditCardOnlinePaymentData $creditCardOnline = null,
        public ?ECheckPaymentData $ach = null,
        public ?IdNamePairData $fund = null,
        public ?bool $donorCoveredFeeFlag = null,
        public ?TimestampsData $timestamps = null,
        public ?string $fundraiserAccountId = null
    ) {}
}
