<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ClientAccountData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?string $companyContactId = null
    ) {}
}
