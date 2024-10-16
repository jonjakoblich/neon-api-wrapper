<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IndividualAccountData extends Data
{
    public function __construct(
        public ?string $accountId,
        public ?bool $noSolicitation,
        public ?LoginData $login,
        public ?string $url,
        public ?TimestampsData $timestamps,
        public ?ConsentData $consent,
        public ?array $accountCustomFields,
        public ?IdNamePairData $source,
        public ?ContactData $primaryContact,
        public ?bool $sendSystemEmail,
        public ?OriginData $origin,
        public ?string $accountCurrentMembershipStatus,
        public ?GenerosityIndicatorData $generosityIndicator,
        public ?IdNamePairData $company,
        public ?string $facebookPage,
        public ?string $twitterPage,
        public ?array $individualTypes
    ) {}
}
