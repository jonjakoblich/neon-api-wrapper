<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountIdAndRefIdResultData
{
    public function __construct(
        public string $id,
        public string $accountId
    ) {}
}
