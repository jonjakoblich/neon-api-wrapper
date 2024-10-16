<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ContactData
{
    public function __construct(
        public string $accountId,
        public string $contactId,
        public string $firstName,
        public string $middleName,
        public string $lastName,
        public string $prefix,
        public string $suffix,
        public string $salutation,
        public string $preferredName,
        public DobData $dob,
        public CodeNamePairData $gender,
        public string $email1,
        public string $email2,
        public string $email3,
        public bool $deceased,
        public string $department,
        public string $title,
        public bool $primaryContact,
        public bool $currentEmployer,
        public string $startDate,
        public string $endDate,
        public array $addresses
    ) {}
}
