<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountDonationSearchResultData extends Data
{
    public function __construct(
        public array $donations,
        public PaginationData $pagination
    ) {}
}
