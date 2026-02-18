<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ListHouseholdContactData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?RelationTypeData $relationType = null,
        public ?bool $isPrimaryHouseHoldContact = null
    ) {}
}
