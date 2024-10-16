<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountSearchResultItemData
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
