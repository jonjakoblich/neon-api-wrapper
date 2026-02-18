<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class RecurringDonationsResponseData extends Data
{
    public function __construct(
        #[ArrayOf(DynaRecurringDonationData::class)]
        public ?array $recurringDonations = [],
        public ?PaginationData $pagination = null
    ) {}
}
