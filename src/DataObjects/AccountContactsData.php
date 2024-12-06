<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AccountContactsData extends Data
{
    public function __construct(
        public string $accountId,
        #[ArrayOf(ContactData::class)]
        public ?array $contacts,
        public PaginationData $pagination
    ) {}
}
