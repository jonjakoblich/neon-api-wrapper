<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class UserGroupData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?int $totalVolunteers = null,
        public ?float $hours = null,
        public ?float $expenses = null,
        public ?float $mileages = null,
    ) {}
}
