<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CampaignFundraiserData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?string $pageTitle = null,
        public ?float $goal = null
    ) {}
}
