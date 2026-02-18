<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrderShippingData extends Data
{
    public function __construct(
        public ?string $shippingMethodName = null,
        public ?string $shippingDate = null,
        public ?string $shippingCompanyName = null,
        public ?string $shippingDeliverTo = null,
        public ?string $city = null,
        public ?CodeNamePairData $stateProvince = null,
        public ?IdNamePairData $country = null,
        public ?string $county = null,
        public ?string $zipCode = null,
        public ?string $zipCodeSuffix = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $phone = null
    ) {}
}
