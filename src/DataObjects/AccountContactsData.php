<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountContactsData extends Data
{
    public function __construct(
        public string $accountId,
        public array $contacts,
        public PaginationData $pagination
    ) {}
}
