<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CampaignFundraiserData extends Data
{
    public function __construct(
        public string $accountId,
        public string $pageTitle,
        public float $goal
    ) {}
}
