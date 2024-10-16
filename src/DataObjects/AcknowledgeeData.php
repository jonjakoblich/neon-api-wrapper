<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AcknowledgeeData
{
    public function __construct(
        public string $accountId,
        public string $name,
        public string $email,
        public AddressData $address
    ) {}
}
