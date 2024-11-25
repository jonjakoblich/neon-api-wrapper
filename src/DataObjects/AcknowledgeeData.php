<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AcknowledgeeData extends Data
{
    public function __construct(
        public string $accountId,
        public string $name,
        public string $email,
        public AddressData $address
    ) {}
}
