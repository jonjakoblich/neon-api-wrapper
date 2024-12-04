<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AccountSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(AccountSearchResultItemData::class)]
        public ?array $accounts,
        public PaginationData $pagination
    ) {}
}
