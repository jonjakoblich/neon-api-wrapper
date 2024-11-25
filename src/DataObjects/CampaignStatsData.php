<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CampaignStatsData extends Data
{
    public function __construct(
        public int $donationCount,
        public float $donationAmount,
        public int $pledgeCount,
        public float $pledgeAmount,
        public int $eventRegistrationCount,
        public float $eventRegistrationAmount,
        public float $grandTotal
    ) {}
}
