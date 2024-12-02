<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AccountDonationSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(DonationData::class)]
        public ?array $donations,
        public PaginationData $pagination
    ) {}
}
