<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountSearchResultItemData extends Data
{
    public function __construct(
        public string $accountId,
        public string $firstName,
        public string $lastName,
        public ?string $companyName,
        public ?string $email,
        public string $userType
    ) {}
}
