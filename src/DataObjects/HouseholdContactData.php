<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class HouseholdContactData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?IdNamePairData $relationType = null,
        public ?bool $isPrimaryHouseHoldContact = null,
        public ?bool $confirmDelete = null
    ) {}
}
