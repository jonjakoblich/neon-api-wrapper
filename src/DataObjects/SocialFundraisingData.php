<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SocialFundraisingData extends Data
{
    public function __construct(
        public bool $enabled,
        public int $fundraisersCount,
        public string $createFundraiserUrl,
        public string $fundraiserListUrl,
        public string $fundraisingPageContent,
        public CampaignStatsData $statistics
    ) {}
}
