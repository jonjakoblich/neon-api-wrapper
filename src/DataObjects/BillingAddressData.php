<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class BillingAddressData extends Data
{
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $stateProvinceCode = null,
        public ?string $territory = null,
        public ?string $countryId = null,
        public ?string $zipCode = null,
        public ?string $zipCodeSuffix = null,
        public ?CatalogData $catalog = null,
        #[ArrayOf(IdNamePairData::class)]
        public ?array $idNamePairs = []
    ) {}
}
