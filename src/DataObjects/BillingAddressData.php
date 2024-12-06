<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class BillingAddressData extends Data
{
    public function __construct(
        public ?string $addressLine1,
        public ?string $addressLine2,
        public ?string $city,
        public ?string $stateProvinceCode,
        public ?string $territory,
        public ?string $countryId,
        public ?string $zipCode,
        public ?string $zipCodeSuffix,
        public ?CatalogData $catalog,
        #[ArrayOf(IdNamePairData::class)]
        public ?array $idNamePairs
    ) {}
}
