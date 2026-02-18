<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class LocationData extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $roomNumber = null,
        public ?string $buildingNumber = null,
        public ?string $address = null,
        public ?string $city = null,
        public ?CodeNamePairData $stateProvince = null,
        public ?IdNamePairData $country = null,
        public ?string $zipCode = null,
        public ?string $zipCodeSuffix = null
    ) {}
}
