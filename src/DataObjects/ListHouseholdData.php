<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ListHouseholdData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $salutation = null,
        #[ArrayOf(ListHouseholdContactData::class)]
        public ?array $contacts = []
    ) {}
}
