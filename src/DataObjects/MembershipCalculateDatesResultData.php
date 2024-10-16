<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipCalculateDatesResultData
{
    public function __construct(
        public string $transactionDate,
        public string $termStartDate,
        public string $termEndDate
    ) {}
}
