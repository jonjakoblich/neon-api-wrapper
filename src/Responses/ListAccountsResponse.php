<?php

namespace TwoJays\NeonApiWrapper\Responses;

use TwoJays\NeonApiWrapper\Concerns\TransformsPropertiesFromArray;
use TwoJays\NeonApiWrapper\Contracts\PaginatedResponse;
use TwoJays\NeonApiWrapper\DataObjects\AccountSearchResultItemData;
use TwoJays\NeonApiWrapper\DataObjects\PaginationData;

class ListAccountsResponse implements PaginatedResponse
{
    use TransformsPropertiesFromArray;

    public function __construct(
        /**
         * @todo use attribute or some way to convert each item in an
         * array to a particular object type
         */
        public array $accounts,
        public PaginationData $pagination,
    ){
        // $this->accounts = array_map(fn($account) => new AccountSearchResultItemData(...$account), $this->accounts);

        // $this->pagination = new PaginationData(...$this->pagination);
    }
}