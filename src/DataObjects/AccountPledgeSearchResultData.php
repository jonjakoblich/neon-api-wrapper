<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountPledgeSearchResultData
{
    public function __construct(
        public string $accountId,
        public array $pledges,
        public PaginationData $pagination
    ) {}
}
