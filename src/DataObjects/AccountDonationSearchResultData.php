<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountDonationSearchResultData
{
    public function __construct(
        public array $donations,
        public PaginationData $pagination
    ) {}
}
