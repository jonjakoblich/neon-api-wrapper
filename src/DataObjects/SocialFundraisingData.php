<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SocialFundraisingData
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
