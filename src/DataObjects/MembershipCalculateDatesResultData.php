<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipCalculateDatesResultData extends Data
{
    public function __construct(
        public string $transactionDate,
        public string $termStartDate,
        public string $termEndDate
    ) {}
}
