<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CampaignFundraiserData
{
    public function __construct(
        public string $accountId,
        public string $pageTitle,
        public float $goal
    ) {}
}
