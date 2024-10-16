<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CampaignStatsData
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
