<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class RecurringDonationData
{
    public function __construct(
        public string $id,
        public int $recurringPeriod,
        public string $accountId,
        public string $recurringPeriodType,
        public float $amount,
        public string $nextDate,
        public string $endDate,
        public IdNamePairData $purpose,
        public IdNamePairData $campaign,
        public CreditCardOnlinePaymentData $creditCardOnline,
        public ECheckPaymentData $ach,
        public IdNamePairData $fund,
        public bool $donorCoveredFeeFlag,
        public TimestampsData $timestamps,
        public string $fundraiserAccountId
    ) {}
}
