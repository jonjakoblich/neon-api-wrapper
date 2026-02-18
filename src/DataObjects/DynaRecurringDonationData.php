<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DynaRecurringDonationData extends Data
{
    public function __construct(
        public ?int $id = null,
        public ?string $accountId = null,
        public ?string $publicRecognitionName = null,
        public ?float $amount = null,
        public ?string $frequency = null,
        public ?string $nextDate = null
    ) {}
}
