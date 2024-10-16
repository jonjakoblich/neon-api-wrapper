<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class DynaRecurringDonationData
{
    public function __construct(
        public int $id,
        public string $accountId,
        public string $donorName,
        public float $amount,
        public string $frequency,
        public string $nextDate
    ) {}
}
