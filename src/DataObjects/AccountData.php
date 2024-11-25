<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountData extends Data
{
    public function __construct(
        public ?IndividualAccountData $individualAccount,
        public ?CompanyAccountData $companyAccount
    ) {}
}
