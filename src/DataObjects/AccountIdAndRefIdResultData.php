<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class AccountIdAndRefIdResultData extends Data
{
    public function __construct(
        public string $id,
        public string $accountId
    ) {}
}
