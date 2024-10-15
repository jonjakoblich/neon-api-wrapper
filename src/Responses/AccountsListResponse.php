<?php

namespace TwoJays\NeonApiWrapper\Responses;

use stdClass;
use TwoJays\NeonApiWrapper\Contracts\PaginatedResponse;
use TwoJays\NeonApiWrapper\DataObjects\AccountData;

class AccountsListResponse implements PaginatedResponse
{
    public function __construct(
        public array $accounts,
        public readonly array $pagination,
    ){
        $this->accounts = array_map(fn($account) => new AccountData(...$account), $this->accounts);
    }
}