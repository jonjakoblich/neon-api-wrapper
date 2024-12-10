<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AddressAddData extends Data
{
    public function __construct(
        public string $accountId,
        public string $contactId,
        public ?string $addressId = null,
        public ?bool $isPrimaryAddress = null,
        public ?IdNamePairData $type = null,
        public ?bool $validAddress = null,
        public ?string $addressLine1 = null,
        public ?string $startDate = null,
        public ?string $addressLine2 = null,
        public ?string $endDate = null,
        public ?string $addressLine3 = null,
        public ?string $addressLine4 = null,
        public ?string $city = null,
        public ?CodeNamePairData $stateProvince = null,
        public ?IdNamePairData $country = null,
        public ?string $territory = null,
        public ?string $county = null,
        public ?string $zipCode = null,
        public ?string $zipCodeSuffix = null,
        public ?string $phone1 = null,
        public ?string $phone1Type = null,
        public ?string $phone2 = null,
        public ?string $phone2Type = null,
        public ?string $phone3 = null,
        public ?string $phone3Type = null,
        public ?string $fax = null,
        public ?string $faxType = null
    ) {}
}
