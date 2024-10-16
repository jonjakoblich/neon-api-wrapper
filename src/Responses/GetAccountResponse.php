<?php

namespace TwoJays\NeonApiWrapper\Responses;

use TwoJays\NeonApiWrapper\Concerns\TransformsPropertiesFromArray;
use TwoJays\NeonApiWrapper\DataObjects\CompanyAccountData;
use TwoJays\NeonApiWrapper\DataObjects\IndividualAccountData;

class GetAccountResponse
{
    use TransformsPropertiesFromArray;

    public function __construct(
        public ?IndividualAccountData $individualAccount,
        public ?CompanyAccountData $companyAccount,
    ){}
}