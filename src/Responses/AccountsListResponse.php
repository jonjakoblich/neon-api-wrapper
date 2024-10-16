<?php

namespace TwoJays\NeonApiWrapper\Responses;

use TwoJays\NeonApiWrapper\Contracts\PaginatedResponse;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;

class AccountsListResponse implements PaginatedResponse
{
    public function __construct(
        public array $accounts,
        public readonly array $pagination,
    ){
        $this->accounts = array_map(fn($account) => new AccountSearchResultItemData(...$account), $this->accounts);
    }
}