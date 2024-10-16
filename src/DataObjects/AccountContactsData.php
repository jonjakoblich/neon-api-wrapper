<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountContactsData
{
    public function __construct(
        public string $accountId,
        public array $contacts,
        public PaginationData $pagination
    ) {}
}
