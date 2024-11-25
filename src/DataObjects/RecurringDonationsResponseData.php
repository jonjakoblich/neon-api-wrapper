<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class RecurringDonationsResponseData extends Data
{
    public function __construct(
        public array $recurringDonations,
        public PaginationData $pagination
    ) {}
}
