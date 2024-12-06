<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CompanyAccountData extends Data
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
        public ?string $name,
        public ?string $primaryContactAccountId,
        public ?array $companyTypes,
        public ?array $shippingAddresses
    ) {}
}
