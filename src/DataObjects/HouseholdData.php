<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class HouseholdData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $salutation = null,
        #[ArrayOf(HouseholdContactData::class)]
        public ?array $contacts = []
    ) {}
}
