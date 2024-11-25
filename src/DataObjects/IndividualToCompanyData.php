<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IndividualToCompanyData extends Data
{
    public function __construct(
        public string $individualContactId,
        public string $companyAccountId
    ) {}
}
