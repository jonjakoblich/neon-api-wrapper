<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AddressAddData
{
    public function __construct(
        public string $accountId,
        public string $addressId,
        public bool $isPrimaryAddress,
        public string $contactId,
        public IdNamePairData $type,
        public bool $validAddress,
        public string $addressLine1,
        public string $startDate,
        public string $addressLine2,
        public string $endDate,
        public string $addressLine3,
        public string $addressLine4,
        public string $city,
        public CodeNamePairData $stateProvince,
        public IdNamePairData $country,
        public string $territory,
        public string $county,
        public string $zipCode,
        public string $zipCodeSuffix,
        public string $phone1,
        public string $phone1Type,
        public string $phone2,
        public string $phone2Type,
        public string $phone3,
        public string $phone3Type,
        public string $fax,
        public string $faxType
    ) {}
}
