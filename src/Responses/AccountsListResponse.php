<?php

namespace TwoJays\NeonApiWrapper\Responses;

use TwoJays\NeonApiWrapper\Contracts\PaginatedResponse;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;
use TwoJays\NeonApiWrapper\DataObjects\PaginationData;

class AccountsListResponse implements PaginatedResponse
{
    public function __construct(
        public array $accounts,
        public PaginationData|array $pagination,
    ){
        $this->accounts = array_map(fn($account) => new AccountSearchResultItemData(...$account), $this->accounts);

        $this->pagination = new PaginationData(...$this->pagination);
    }
}