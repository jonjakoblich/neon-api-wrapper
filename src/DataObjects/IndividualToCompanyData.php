<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class IndividualToCompanyData
{
    public function __construct(
        public string $individualContactId,
        public string $companyAccountId
    ) {}
}
