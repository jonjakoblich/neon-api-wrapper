<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountSearchResultData
{
    public function __construct(
        public array $accounts,
        public PaginationData $pagination
    ) {}
}
