<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SocialFundraisingData extends Data
{
    public function __construct(
        public ?bool $enabled = null,
        public ?int $fundraisersCount = null,
        public ?string $createFundraiserUrl = null,
        public ?string $fundraiserListUrl = null,
        public ?string $fundraisingPageContent = null,
        public ?CampaignStatsData $statistics = null
    ) {}
}
