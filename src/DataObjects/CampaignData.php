<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CampaignData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $code = null,
        public ?string $startDate = null,
        public ?string $endDate = null,
        public ?IdNamePairData $fund = null,
        public ?IdNamePairData $purpose = null,
        public ?IdNamePairData $parentCampaign = null,
        public ?string $pageContent = null,
        public ?string $status = null,
        public ?float $goal = null,
        public ?string $campaignPageUrl = null,
        public ?string $donationFormUrl = null,
        public ?CampaignStatsData $statistics = null,
        public ?SocialFundraisingData $socialFundraising = null,
        public ?CraInfoData $craInfo = null,
        public ?TaxDeducibleInfoData $taxDeductibleInfo = null
    ) {}
}
