<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DynaRecurringDonationData extends Data
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
