<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class LocationData extends Data
{
    public function __construct(
        public string $name,
        public string $roomNumber,
        public string $buildingNumber,
        public string $address,
        public string $city,
        public CodeNamePairData $stateProvince,
        public IdNamePairData $country,
        public string $zipCode,
        public string $zipCodeSuffix
    ) {}
}
