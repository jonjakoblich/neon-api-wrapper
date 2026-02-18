<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AcknowledgeeData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?string $name = null,
        public ?string $email = null,
        public ?AddressData $address = null
    ) {}
}
