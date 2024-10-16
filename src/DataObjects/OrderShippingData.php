<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OrderShippingData
{
    public function __construct(
        public string $shippingMethodName,
        public string $shippingDate,
        public string $shippingCompanyName,
        public string $shippingDeliverTo,
        public string $city,
        public CodeNamePairData $stateProvince,
        public IdNamePairData $country,
        public string $county,
        public string $zipCode,
        public string $zipCodeSuffix,
        public string $addressLine1,
        public string $addressLine2,
        public string $phone
    ) {}
}
