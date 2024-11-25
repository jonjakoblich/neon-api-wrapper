<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ShippingAddressData extends Data
{
    public function __construct(
        public string $addressId,
        public string $shippingCompanyName,
        public string $shippingDeliverTo,
        public IdNamePairData $type,
        public string $addressLine1,
        public string $addressLine2,
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
