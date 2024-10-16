<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CampaignData
{
    public function __construct(
        public string $id,
        public string $name,
        public string $code,
        public string $startDate,
        public string $endDate,
        public IdNamePairData $fund,
        public IdNamePairData $purpose,
        public IdNamePairData $parentCampaign,
        public string $pageContent,
        public string $status,
        public float $goal,
        public string $campaignPageUrl,
        public string $donationFormUrl,
        public CampaignStatsData $statistics,
        public SocialFundraisingData $socialFundraising,
        public CraInfoData $craInfo,
        public TaxDeducibleInfoData $taxDeductibleInfo
    ) {}
}
