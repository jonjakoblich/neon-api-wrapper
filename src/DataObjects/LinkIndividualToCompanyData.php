<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class LinkIndividualToCompanyData
{
    public function __construct(
        public string $individualContactId,
        public bool $isPrimaryContact,
        public string $companyAccountId,
        public bool $isCurrentEmployee,
        public string $startDate,
        public string $endDate,
        public AddressData $address,
        public string $department,
        public string $title,
        public string $companyEmail
    ) {}
}
