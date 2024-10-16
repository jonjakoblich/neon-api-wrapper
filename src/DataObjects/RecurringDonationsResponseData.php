<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class RecurringDonationsResponseData
{
    public function __construct(
        public array $recurringDonations,
        public PaginationData $pagination
    ) {}
}
