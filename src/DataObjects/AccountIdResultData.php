<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountIdResultData extends Data
{
    public function __construct(
        public string $accountId
    ) {}
}
