<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountData
{
    public function __construct(
        public IndividualAccountData $individualAccount,
        public CompanyAccountData $companyAccount
    ) {}
}
