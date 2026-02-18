<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AccountPledgeSearchResultData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        #[ArrayOf(PledgeData::class)]
        public ?array $pledges = [],
        public ?PaginationData $pagination = null
    ) {}
}
