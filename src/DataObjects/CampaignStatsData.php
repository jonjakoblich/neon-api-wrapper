<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CampaignStatsData extends Data
{
    public function __construct(
        public ?int $donationCount = null,
        public ?float $donationAmount = null,
        public ?int $pledgeCount = null,
        public ?float $pledgeAmount = null,
        public ?int $eventRegistrationCount = null,
        public ?float $eventRegistrationAmount = null,
        public ?float $grandTotal = null
    ) {}
}
