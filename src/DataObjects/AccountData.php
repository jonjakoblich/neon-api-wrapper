<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Enums\AccountUserTypeEnum;

class AccountData
{
    public function __construct(
        public readonly string $accountId,
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly ?string $companyName,
        public readonly ?string $email,
        public readonly AccountUserTypeEnum|string $userType,
    ){}
}