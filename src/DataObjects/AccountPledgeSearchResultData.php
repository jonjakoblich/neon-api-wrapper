<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountPledgeSearchResultData extends Data
{
    public function __construct(
        public string $accountId,
        public array $pledges,
        public PaginationData $pagination
    ) {}
}
